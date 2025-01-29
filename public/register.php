<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function generateUUID() {
    return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff), mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $passwordd = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $uuid = isset($_POST['uuid']) ? filter_var($_POST['uuid'], FILTER_SANITIZE_SPECIAL_CHARS) : generateUUID();
    $nom = filter_var($_POST['nom'], FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_var($_POST['prenom'], FILTER_SANITIZE_SPECIAL_CHARS);
    $usernamee = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
    $jour = filter_var($_POST['jour'], FILTER_SANITIZE_NUMBER_INT);
    $mois = filter_var($_POST['mois'], FILTER_SANITIZE_NUMBER_INT);
    $annee = filter_var($_POST['annee'], FILTER_SANITIZE_NUMBER_INT);
    $date_naissance = sprintf('%04d-%02d-%02d', $annee, $mois, $jour);


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Invalid email format"]);
        exit;
    }

    #require 'dbConfig.php';


    $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        echo json_encode(["status" => "error", "message" => "Email already in use"]);
        $stmt->close();
        $conn->close();
        exit;
    }
    $stmt->close();


    $stmt = $conn->prepare("INSERT INTO users (email, password, uuid, nom, prenom, username, date_naissance) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $email, $passwordd, $uuid, $nom, $prenom, $usernamee, $date_naissance);


    if ($stmt->execute()) {
        $message = "
        <html>
        <head>
            <title>Confirmation de création de compte</title>
        </head>
        <body>
            <p>Nom : $nom</p>
            <p>Prénom : $prenom</p>
            <p>Email : $email</p>
            <p>Message : Votre compte a été créé avec succès.</p>
        </body>
        </html>";

        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer(true);

        try {
        
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'PRIVATE';
            $mail->Password   = 'PRIVATE';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $mail->setFrom('PRIVATE', 'Nouvelle prise de contact');
            $mail->addAddress($email);


            $mail->isHTML(true);
            $mail->Subject = 'Informations récupérées du formulaire:';
            $mail->Body    = $message;
            $mail->AltBody = '';

            $mail->send();
            echo json_encode(["status" => "success", "message" => "New record created successfully and email sent"]);
        } catch (Exception $e) {
            echo json_encode(["status" => "error", "message" => "New record created successfully but email could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Error: " . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
}
?>

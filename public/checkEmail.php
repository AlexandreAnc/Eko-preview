<?php
#include('dbConfig.php');

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(array('error' => 'Connection failed: ' . $conn->connect_error));
    exit();
}

$email = $_POST['email'] ?? '';

if (empty($email)) {
    echo json_encode(array('error' => 'Email is required.'));
    exit();
}


$sql = $conn->prepare("SELECT COUNT(*) as count FROM users WHERE email = ?");
if (!$sql) {
    echo json_encode(array('error' => 'Failed to prepare statement: ' . $conn->error));
    exit();
}

$sql->bind_param("s", $email);
if (!$sql->execute()) {
    echo json_encode(array('error' => 'Failed to execute statement: ' . $sql->error));
    exit();
}

$result = $sql->get_result();
if (!$result) {
    echo json_encode(array('error' => 'Failed to get result: ' . $sql->error));
    exit();
}

$row = $result->fetch_assoc();

$response = array('available' => $row['count'] == 0);


echo json_encode($response);


$conn->close();
?>
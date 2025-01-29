<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: profile.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#202020">
    <meta name="msapplication-TileColor" content="#202020">
    <meta name="description" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="">
    <meta property="og:url" content="https://alexanc.fr/eko">
    <meta property="og:locale" content="fr_FR">
    <meta name="author" content="Alexandre Ancelle">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var script = document.createElement("script");
            script.src = "script/loading.js";
            document.body.appendChild(script);
        });
    </script>
    <title>Eko - Connexion</title> 
</head>
<body>
    <script>
        function checkScreenSize() {
            const overlay = document.getElementById('screen-size-overlay');
            console.log('Checking screen size:', window.innerWidth);
            if (window.innerWidth > 768) {
                console.log('Screen width is greater than 768px');
                if (!overlay) {
                    console.log('Overlay does not exist, creating one');
                    const div = document.createElement('div');
                    div.id = 'screen-size-overlay';
                    div.style.position = 'fixed';
                    div.style.top = '0';
                    div.style.left = '0';
                    div.style.width = '100%';
                    div.style.height = '100%';
                    div.style.backgroundColor = 'white';
                    div.style.zIndex = '9999';
                    div.style.display = 'flex';
                    div.style.justifyContent = 'center';
                    div.style.alignItems = 'center';
                    div.innerHTML = '<p style="color: #393939;">Merci de mettre le format en version téléphone</p>';
                    document.body.appendChild(div);
                } else {
                    console.log('Overlay already exists');
                }
            } else {
                console.log('Screen width is less than or equal to 768px');
                if (overlay) {
                    console.log('Removing overlay');
                    overlay.remove();
                } else {
                    console.log('No overlay to remove');
                }
            }
        }

        checkScreenSize();
        window.addEventListener('resize', checkScreenSize);
    </script>
    <section class="load">
        <div class="logo-titre">
            <img style="width: 150px; height: 150px;" src="img/logoblanc.png" alt="">
        </div>
        <div class="loader">
            <div class="loader-inner"></div>
            <p>Chargement..</p>
        </div>
    </section>
    <section id="login" class="login">
        <img style="width: 150px; height: 150px;" src="img/logoblanc.png" alt="">
        <p class="text">Tes artistes préférés à <span class="pink">collectionner</span></p>
        <div class="button-separator">
            <a id="rejoindre-btn" onclick="rejoindre();" class="rejoindre-btn" href="">Rejoindre</a>
            <a id="connexion-btn" class="connexion-btn" href="home.php">Connexion</a>
        </div>
    </section>

    <section id="rejoindre" class="rejoindre">
        <img style="width: 100px; height: 100px;" src="img/logoblanc.png" alt="">
        <div class="text-forms">
            <p class="text semi-bold"><span class="orange">Rejoindre</span></p>
            <form id="registerForm" method="post">
                <div id="step1" class="step1">

                    <div class="input-container">
                        <input placeholder="Email" type="email" id="email" name="email" required>
                        <input placeholder="Mot de passe" type="password" id="password" name="password" required>
                    </div>    

                    <div class="btn-container">
                        <button id="emailnextbutton" class="suivant" type="button" onclick="nextStep(2)">Suivant</button>
                        <button class="retour" type="button" onclick="accueil();">Retour</button>
                    </div>
                </div>

                <div id="step2" class="step2" style="display:none;">

                    <div class="input-container">
                        <input placeholder="Prénom" type="text" id="prenom" name="prenom" required>
                        <input placeholder="Nom" type="text" id="nom" name="nom" required>
                    </div>

                    <div class="btn-container">
                        <button class="suivant" type="button" onclick="nextStep(3)">Suivant</button>
                        <button class="retour" type="button" onclick="prevStep(1)">Retour</button>
                    </div> 
                </div>

                <div id="step3" class="step3" style="display:none;">

                    <div class="input-container">
                        <input placeholder="Pseudo" type="text" id="username" name="username" required>
                        <div class="input-container date">
                            <input placeholder="Jour" type="number" id="jour" name="jour" min="1" max="31" required class="date">
                            <input placeholder="Mois" type="number" id="mois" name="mois" min="1" max="12" required class="date">
                            <input placeholder="Année" type="number" id="annee" name="annee" min="1900" max="2100" class="date" required>
                        </div>
                    </div>

                    <div class="btn-container">
                        <button class="suivant" type="button" onclick="submitForm()">Suivant</button>
                        <button class="retour" type="button" onclick="prevStep(2)">Retour</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="step-section">
            <div class="step" id="step1">
                <div class="step-circle active"></div>
                <p class="step-minicircle">•</p>
                <p class="step-minicircle">•</p>
                <p class="step-minicircle">•</p>
                <div class="step-circle"></div>
                <p class="step-minicircle">•</p>
                <p class="step-minicircle">•</p>
                <p class="step-minicircle">•</p>
                <div class="step-circle"></div>
            </div>
        </div>
    </section>

    <section id="rejoindre-success" class="rejoindre-success" style="display: none;">
        <img style="width: 150px; height: 150px;" src="img/logoblanc.png" alt="">
        <p class="text" style="font-size: 24px;"><span class="pink">Merci</span></p>
        <p style="font-weight: 500; font-size: 20px;">Ton profil a été créé.</p>
        <p style="font-weight: 400; font-size: 20px;">Tu pourras le personnaliser à ta guise dans l’onglet “Profil”</p>
        <a id="rejoindre-btn" onclick="accueil();" class="rejoindre-btn" href="">Suivant</a>
    </section>
    
</body>
</html>
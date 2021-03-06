<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0, minimum-scale= 0.20">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="Users/profilScript.js"></script>
    <script src="js/script.js"></script>
    <title>New game+ - Profil</title>
</head>
<body>
<div class="mainConteiner" role="main">
    <header class="header">
        <div class="blockLogo"><img src="asset/img/logo_blog.png" alt="logo_blog"></div>
        <a href="#" class="headerIcon"></a>
        <a href="#" class="hideIcon">
            <hr id="croix1">
            <hr id="croix2">
        </a>
        <nav class="menu">
            <a href="#">Accueil</a>
            <a href="#">Article</a>
            <a href="#">Image</a>
            <a href="#">Connexion</a>
        </nav>
        <div class="desktopMenu">
            <a href="#">Accueil</a>
            <a href="#">Image</a>
            <a href="#">Profil</a>
            <a href="#">Connexion</a></div>
        <form class="login">
            E-mail : <input type="email" name="userEmail" id="userEmail"><label for="userEmail"></label><br>
            Password : <input type="password" name="userPassword" id="userPassword"><label
                for="userPassword"></label><br>
            <input type="submit" value="Login">
        </form>
    </header>
    <div class="blockProfil">
        <form method="post" action="../../controller/Users/profilController.php" class="profilForm">
            Votre pseudo <br><input type="text" name="pseudo" placeholder="Pseudo" class="profilField"><br><br>
            Votre prénom <br><input type="text" name="firstName" placeholder="Prénom" class="profilField"><br><br>
            Votre nom <br><input type="text" name="lastName" placeholder="Nom" class="profilField"><br><br>
            Votre adresse mail <br><input type="email" name="email" placeholder="E-mail" class="profilField"><br><br>
            Votre mot de passe <br><input type="password" name="password" placeholder="Mot de passe" class="profilField"><br><br>
            <input type="submit" value="Envoyer" class="profilField">
        </form>
    </div>
    <footer class="footer">
        2016 © New game+ - Tous droits reservés
    </footer>
</div>
</body>
</html>
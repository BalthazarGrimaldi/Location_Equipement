<?php
session_start();
?>
<html lang="fr">
<head>
    <title>Gestion des Locations</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
<header>
    <div class="row">
        <div class="col">
            <h1 class="title">Sorbonne université</h1>
        </div>
    </div>
</header>
<center>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 offset-4 connexion">
                <h2 class="font-color identification">Connexion</h2>
            </div>
        </div>
    </div>
    <?php
    require_once("controler/controler.php");
    $unControler = new Controler ("localhost", "universite", "root", "");
    require_once("vue/connexion.php");
    if (isset($_POST['SeConnecter'])) {
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];
        $result = $unControler->verifConnexion($login, $mdp);
        var_dump($result);
        if (isset($result['nom'])) {
            // creation session
            $_SESSiON['login'] = $result['login'];
            $_SESSION['nom'] = $result['nom'];
            $_SESSION['prenom'] = $result['prenom'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['telephone'] = $result['telephone'];

            header('Location: menu_site.php?page=1');
        } else {
            echo "veuillez vérifier vos identifiants";
        }
    }
    ?>
</center>
</body>
</html>

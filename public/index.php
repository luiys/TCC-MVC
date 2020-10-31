<?php

include '../app/Libraries/Rota.php';
include '../app/Libraries/Controller.php';

?>

<html>

<head>

    
    <header id = "HeaderIndex">
    <?php include "../app/View/include/Header.php"; ?>
    </header>

    <?php
    include "../app/View/include/Head.php";
    //include "../app/View/include/Load.php";
    include "../app/Models/php/Pag.php";
    ?>

    <title>APE</title>

</head>

<body>

    <?php

    $rotas = new Rota();

    ?>



    <?php include "../app/View/include/Footer.php"; ?>
    <?php include "../app/View/include/SideNavBar.php"; ?>
    <?php include "../app/View/include/HeaderNotification.php"; ?>
    <?php include "../app/View/include/HeaderConfig.php"; ?>
    <?php include "../app/View/include/CookieMessage.php"; ?>
    <?php include "../app/View/include/Script.php"; ?>

</body>

</html>
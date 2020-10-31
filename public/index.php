<?php

include '../app/configuracao.php';
include '../app/Libraries/Rota.php';
include '../app/Libraries/Controller.php';

?>

<html>

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="Content-Language" content="pt-br" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />

    <link rel="stylesheet" href="<?=URL?>public/css/Pag.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

    <script src="<?=URL?>public/js/Pag.js" defer></script>
    <script src="<?=URL?>public/js/Ajax.js" defer></script>
    <script src="<?=URL?>public/js/Mask.js" defer></script>

    <?php
    include APP."/View/include/Load.php";
    include APP."/Models/php/Pag.php";
    ?>

    <title>APE</title>

</head>

<body>


    <header id="HeaderIndex">
        <?php include APP."/View/include/Header.php"; ?>
    </header>

    <?php
    $rotas = new Rota();
    include APP."/View/include/Footer.php";
    ?>



    <?php include "../app/View/include/SideNavBar.php"; ?>
    <?php include "../app/View/include/HeaderNotification.php"; ?>
    <?php include "../app/View/include/HeaderConfig.php"; ?>
    <?php include "../app/View/include/CookieMessage.php"; ?>
    <?php include "../app/View/include/Script.php"; ?>

</body>

</html>
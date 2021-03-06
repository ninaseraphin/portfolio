<?php
        if($page =="projet"){
            $debut="../";
        }else{
            $debut="./";
        }
    ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Portfolio Nina Seraphin</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo($debut)?>css/accueil.css">
        <link rel="stylesheet" type="text/css" href="<?php echo($debut)?>css/generic.css">
        <link rel="stylesheet" type="text/css" href="<?php echo($debut)?>css/elements.css">
        <link rel="stylesheet" type="text/css" href="<?php echo($debut)?>css/settings.css">
        <?php
        if($page =="projet"){
            if($_SESSION["projet"]["Nom"] == "Motifs"){
                ?>
                <script src="<?php echo($debut)?>node_modules/animejs/lib/anime.min.js"></script>
                <script src="<?php echo($debut)?>js/fleurs.js"></script>
                <script src="<?php echo($debut)?>js/motif2.js"></script>
                <script src="<?php echo($debut)?>js/motif4.js"></script>
                <script src="<?php echo($debut)?>js/motif5-poissons.js"></script>
                <script src="<?php echo($debut)?>js/kaleidoscope.js"></script>
                <script src="<?php echo($debut)?>js/motif6.js"></script>
                <script src="<?php echo($debut)?>js/motif7.js"></script>
                <script src="<?php echo($debut)?>js/motif8.js"></script>
                <?php
            };
            ?>
            <link rel="stylesheet" type="text/css" href="<?php echo($debut)?>css/projet.css">
            <script src="<?php echo($debut)?>js/scrollTop.js" type="text/javascript" async=""></script>
            <script src="<?php echo($debut)?>js/scrollAutreProjets.js" type="text/javascript" async=""></script>
            <?php
        }else if($page =="projets"){
            ?>
            <link rel="stylesheet" type="text/css" href="<?php echo($debut)?>css/projets.css">
            <script src="<?php echo($debut)?>js/slideProjets.js" type="text/javascript" async=""></script>
            <?php
        }else if($page == "apropos"){
            ?>
            <link rel="stylesheet" type="text/css" href="<?php echo($debut)?>css/apropos.css">
            <?php
        }else{
            ?>
            <link rel="stylesheet" type="text/css" href="<?php echo($debut)?>css/intro.css">
            <script src="<?php echo($debut)?>node_modules/animejs/lib/anime.min.js"></script>
            <script src="<?php echo($debut)?>js/video.js" type="text/javascript" async=""></script>
            <script src="<?php echo($debut)?>js/intro.js" type="text/javascript" async=""></script>
            <?php
        }
        ?>
        <script src="<?php echo($debut)?>js/menu.js" type="text/javascript" async=""></script>
        
        
        
    </head>
    <body>
        <header>
            <a class="logo" href="/accueil">
                <img class="img-logo"src="<?php echo($debut)?>assets/logoPortfolio2-02.svg" >
            </a>
            <nav class="nav-desktop">
                <ul class="nav-list">
                    <li class="nav-item"><a href=/projets>Projets</a></li>
                    <li class="nav-item"><a href="/apropos">À propos</a></li>
                    <!-- <li class="nav-item en"><a>EN</a></li> -->
                </ul>
            </nav>
            <nav class="nav-phone">
                    <img class="burger" src="<?php echo($debut)?>assets/burger.svg" style="height:20px">
                    <img class="close hide" src="<?php echo($debut)?>assets/close.svg" style="height:20px">
                <ul class="nav-list-phone hide">
                    <li class="nav-item"><a href=/projets>Projets</a></li>
                    <li class="nav-item"><a href="/apropos">À propos</a></li>
                    <!-- <li class="nav-item en"><a>EN</a></li> -->
                </ul>
            </nav>
        </header>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio Nina Seraphin - projets</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <link rel="stylesheet" type="text/css" href="css/test.css">
    <link rel="stylesheet" type="text/css" href="css/generic.css">
    <link rel="stylesheet" type="text/css" href="css/elements.css">
    <link rel="stylesheet" type="text/css" href="css/projets.css">
    <script src="js/menu.js" type="text/javascript" async=""></script>
    <script src="js/scrollProjets.js" type="text/javascript" async=""></script>
    <script src="js/slideProjets.js" type="text/javascript" async=""></script>
</head>
<body>
    <header>
        <a class="logo" href="index.html">
            <img class="img-logo"src="assets/logoPortfolio2-02.svg" >
        </a>
        <nav class="nav-desktop">
            <ul class="nav-list">
                <li class="nav-item"><a href=projets.html>Projets</a></li>
                <li class="nav-item"><a href="apropos.html">À propos</a></li>
                <li class="nav-item en"><a>EN</a></li>
            </ul>
        </nav>
        <nav class="nav-phone">
                <img class="burger" src="assets/burger.svg" style="height:20px">
                <img class="close hide" src="assets/close.svg" style="height:20px">
            <ul class="nav-list-phone hide">
                <li class="nav-item"><a href=projets.html>Projets</a></li>
                <li class="nav-item"><a href="apropos.html">À propos</a></li>
                <li class="nav-item en"><a>EN</a></li>
            </ul>
        </nav>
    </header> -->
<!-- TEST -->


<?php
$tab =  $_SESSION['liste'];
// foreach($tab as $projet){
//     echo $projet["Nom"];
// }

?>
<main>
    <section class ="points">
    <?php
        foreach($tab as $projet){
            echo ("<div class='cercle' data-id='".$projet["Id"]."'></div>");
        }
    ?>
    </section>
    <!-- <section class="retour">
        <img class="flechedouble" src="../assets/flechedouble.svg" style="height:40px">
    </section> -->

    <section class ="projets">

        <?php
            foreach($tab as $projet){
                echo ('<section class="unProjet-container ');
                if($projet['Id']==1){
                    echo('visible');
                }else{
                    echo('cache');
                }
                echo('" data-id="'.$projet["Id"].'">')
                ?>
                <div class="unProjet" > 
                <section class="contenu">
                    <div class="texte">
                        <section>
                        <h3 class="type">
                <?php
                echo $projet["NomType"];
                ?>
                </h3>
                     <h2 class="titre">
                <?php
                echo $projet["Nom"];
                ?>
                </h2>
                        </section>
                        <p class="description">
                        <?php
                echo $projet["Description"];
                ?>
                </p>
                <a href=<?php echo ('"projet/'.$projet["Id"].'"');?>><img class="fleche" src="./assets/fleche.svg" style="height:20px"></a>
                    </div>
                </section>
                <div class="image">
                    <img src='<?php echo("./assets/".$projet["NomImage"].".".$projet["ExtensionImage"]);?>' alt="<?php echo($projet['Alt']);?>">
                </div>
            </section>
                <?php
            }
            ?>
        </section>
        

        <!-- <section class="unProjet-container " id="projet1">
            <div class="unProjet" > 
                <section class="contenu">
                    <div class="texte">
                        <section>
                                <p class="type">Illustration</p>
                                <h2 class="titre">Titre projet</h2>
                        </section>
                        <p class="description">Courte description du projet en une ou deux phrases.</p>
                        <a href="unprojet.html"><img class="fleche" src="assets/fleche.svg" style="height:20px"></a>
                    </div>
                </section>
                <div class="image"></div>
            </div>
            
        </section> -->

    
</body>
</html>
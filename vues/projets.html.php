<?php
$tab =  $_SESSION['liste'];
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
                <section class="contenu <?php echo $projet['Couleur']?>">
                    <div class="texte">
                        <section>
                        <h3 class="type <?php if($projet['Couleur'] =="bleu"){echo('blanc');}?>">
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
                <a href=<?php echo ('"projet/'.$projet["Id"].'"');?>><img class="fleche" src="./assets/fleche.svg" ></a>
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
</body>
</html>
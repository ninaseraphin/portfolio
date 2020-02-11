    <?php
        $projet=$_SESSION["projet"];
        $images=$_SESSION["medias"];
    ?>
    
    <div class="container">
        <div class=un-projet-container>
                <section class="un-projet">
                        <section class="contenu">
                            <div class="texte">
                                <h1 class="titre"><?php echo $projet["Nom"]?></h1>
                                <p class="description"><?php echo $projet["Detail"]?>
                                </p>
                            </div>
                        </section>
                        <div class="image"><img src="<?php echo "../assets/".$images[0]["Nom"]; echo ".".$images[0]["Extension"];?>" alt="<?php echo $images[0]["Alt"]; ?>"></div>
                    </section>
        </div>
        
        <section class="props">
            <article class="proprietes">
                <h2 class="titre-props">Domaine</h2 >
                <p class="reponse"><?php echo $projet["NomType"]?></p>
            </article>
            <article class="proprietes">
                <h2  class="titre-props">Contexte</h2 >
                <p class="reponse"><?php echo $projet["Contexte"]?></p>
            </article>
            <article class="proprietes">
                <h2  class="titre-props">Année</h2 >
                <p class="reponse"><?php echo $projet["Annee"]?></p>
            </article>
        </section>
        <?php
            foreach($images as $img){
                if($img["Small"]){
                    $class= "class='illu small'";
                }else{
                    $class="class='illu'";
                }

                if(!$img["Principale"]){
                    echo '<img '.$class.' src="../assets/'.$img['Nom'].'.'.$img['Extension'].'" alt="'.$img['Alt'].'">';
                }
                
            }

        ?>

        <!-- <div class="image-projet"></div>
        <div class="image-projet small"></div>
        <div class="image-projet small"></div>
        <div class="image-projet"></div> -->
    </div>
    <section class="retour">
        <img class="fleche-retour" src="../assets/flecheretour.svg" style="height:50px">
    </section>

</body>
</html>
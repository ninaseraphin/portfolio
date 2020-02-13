    <?php
        $projet=$_SESSION["projet"];
        $images=$_SESSION["medias"];
        $competences=$_SESSION["competences"];
    ?>
    
    <div class="container <?php echo $projet["Couleur"]?>">
        <div class=un-projet-container>
                <section class="un-projet">
                        <section class="contenu">
                            <div class="texte">
                                <h1 class="titre"><?php echo $projet["Nom"]?></h1>
                                <p class="description"><?php echo $projet["Detail"]?>
                                </p>
                            </div>
                        </section>
                        <div class="image">
                            <?php 
                                foreach($images as $img){
                                    if($img["Principale"]){
                                        echo("<img src='../assets/".$img["Nom"]."' alt='".$img["Alt"]."'>");
                                    }
                                }
                            ?>
                        </div>
                    </section>
        </div>
        
        <section class="props <?php  if($projet['Couleur'] =="bleu"){echo('blanc');} ?>">
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

                if(!$img["Principale"]  && $img["Extension"]!== "mp4"){
                    echo '<img '.$class.' src="../assets/'.$img['Nom'].'.'.$img['Extension'].'" alt="'.$img['Alt'].'">';
                }else if($img["Extension"] == "mp4"){
                    echo '<video playsinline="" autoplay="" muted="" preload="" loop="" '.$class.' src="../assets/'.$img['Nom'].'.'.$img['Extension'].'" alt="'.$img['Alt'].'"></video>';
                }
            }

            if($projet["Nom"] == "Motifs"){
                include("projetFinal.html.php");
            }
        ?>
         <section class="props">
            <section class="proprietes">
                <h2 class="titre-props">Compétences utilisées</h2>
                <article class="competences">
                <?php
                    foreach($competences as $comp){
                        echo ' <p class="reponse">'.$comp["Nom"].'</p>';
                    }
                ?>
            </article>
            <section>
   
        </section>
    </div>
    <section class="retour">
        <img class="fleche-retour" src="../assets/flecheretour.svg" style="height:50px">
    </section>
    <section class="autresProjets">
        <a class="navProjet" href="<?php 
        switch($projet["Id"]){
            case 1 :
                $projetBefore= 7;
                $projetAfter= 2;
            break;
            case 7:
                $projetBefore=6;
                $projetAfter=1;
            break;
            default:
                $projetBefore= $projet["Id"]-1;
                $projetAfter= $projet["Id"]+1;
        }
        echo ($projetBefore);?>">
       <p class="legende">Précédent</p> <svg class="flechesvg fleche-before" width="54" height="19" viewBox="0 0 54 19" fill="none">
<path d="M0 9H52" stroke-width="2"/>
<path d="M52.5 9.5L44 1"  stroke-width="2"/>
<path d="M52.5 9L44 17.5"  stroke-width="2"/>
</svg>
</a>
        
        <a class ="navProjet" href="<?php echo ($projetAfter);?>"><p class="legende">Suivant</p><svg class="flechesvg"width="54" height="19" viewBox="0 0 54 19" fill="none">
<path d="M0 9H52" stroke-width="2"/>
<path d="M52.5 9.5L44 1"  stroke-width="2"/>
<path d="M52.5 9L44 17.5"  stroke-width="2"/>
</svg></a>
    </section>

</body>
</html>
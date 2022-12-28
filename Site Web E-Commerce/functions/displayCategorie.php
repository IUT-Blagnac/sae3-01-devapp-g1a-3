<?php

function replace_accents($nom) {
    $to_replace = array("etement", "alecon", "iece");
    $replaced_by = array("êtement", "aleçon", "ièce");
    $nom = str_replace($to_replace, $replaced_by, $nom);
    return $nom;
}

function display_cat_main($nom_cat, $genre) {
    ?>
    <a class="categ" href="ConsultCategorie.php?nomCateg=<?php echo $nom_cat;?>&genre=<?php echo $genre;?>">
        <div class = "categDiv">
        <?php
            echo replace_accents($nom_cat);
        ?>
        </div>
    </a>

        <?php
}

function display_cat_sub($nom_cat, $id_cat, $genre) {
    ?>
    <a class="categ" href="ConsultProduct.php?nomSousCateg=<?php echo $nom_cat;?>&genre=<?php echo $genre;?>"> 
        <div class = "categDiv">
        <?php
            echo replace_accents($nom_cat);
        ?>
        </div>
    </a>

        <?php
}

function display_prod($prod, $prix, $img, $id) {
    ?>
    <a class="result" href="ConsultOneProduct.php?id=<?php echo $id;?>"> 
        
        <img class="resultImg" src="./images/defaultImage.jpg"/>
        <div class = "resultDiv">
        <?php
        // TODO
            echo $prod;
            echo "</br>";
            echo $prix." €";
            echo "</br>";
            echo $id;
            echo "</br>";
        ?>
        </div>
    </a>

        <?php
}

?>
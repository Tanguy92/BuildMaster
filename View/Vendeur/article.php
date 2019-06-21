<?php

include("View/Template/templateMidArticle.php");
?>


<form action="index.php?page=articleVendeur" method="POST">
    <?php
    echo "<img src=",$donnees["photo"]," width=65 height=65 >",$donnees["nom"]," ",$donnees["prix"], "€<button name=supprimer type=submit value=", $donnees["idProduit"], ">Supprimer</button>";
    ?>
</form>
<form action="index.php?page=modifierArticle" method="POST">
    <?php
            echo "<button name=modifier type=submit value=", $donnees["idProduit"], ">Modifier</button>";
        ?>
</form>
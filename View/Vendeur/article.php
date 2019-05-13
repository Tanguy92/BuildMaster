<form action="index.php?page=articleVendeur" method="POST">
    <?php
    echo $donnees["nom"], "<button name=supprimer type=submit value=", $donnees["idProduit"], ">Supprimer</button>
                          <a href=mon_lien.php?param=" . $donnees[idProduit] . ">Modifier</a>'
                          <button name=modifier type=submit value=", $donnees["idProduit"], ">Modifier</button>";
    ?>
</form>
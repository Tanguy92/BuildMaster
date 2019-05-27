<form action="index.php?page=afficheArticle" method="POST">
    <input type="hidden" name="prix" value = <?php echo $donnees["prix"]; ?>>
    <?php
    echo "<img src=",$donnees["photo"]," width=65 height=65 >",$donnees["nom"]," ",$donnees["prix"], "€<button name=ajoutPanier type=submit value=", $donnees["idProduit"], ">Ajouter au panier</button>";
    ?>
</form>
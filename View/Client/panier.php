<form action="index.php?page=panier" method="POST">
    <?php
    echo "<img src=",$donnees2["photo"]," width=65 height=65 >",$donnees2["nom"]," prix à la journée ",$donnees2["prix"],"€ <button name=supprimerPanier type=submit value=", $donnees2["idProduit"], ">Supprimer du panier</button>";
    ?>
</form>
<form action="index.php?page=panier" method="POST">
    Date de votre location : de <input type="date" name="dateDebut" min=<?php echo $donnees2["dateDebut"];?> max=<?php echo $donnees2["dateFin"];?> required>  à <input type="date" name="dateFin" min=<?php echo $donnees2["dateDebut"];?> max=<?php echo $donnees2["dateFin"];?> required> <br>
    <?php
    echo "<button name=commander type=submit value=", $donnees2["idProduit"], ">Commander</button>";
    ?>
</form>

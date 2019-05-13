
<form action="index.php?page=modifierArticle" method="POST" enctype="multipart/form-data">
<input type="hidden" name="idProduit" value=<?php echo $idProduit ?>>
<input type="hidden" name="photo" value=<?php echo $photo ?>>


Nom de l'article : <input type="text" value=<?php echo $nom; ?> name="nomArticle" required> <br>
Prix unitaire de l'article : <input type="number" value=<?php echo $prix; ?> name="prixArticle" required> € <br>
Catégorie de l'article : <select name ="categorieArticle" required> <br>


<?php
   echo "<option value = $idCategorie>", $nomCate,"</option>";
   $reponse = selectCategorie();
   while($donnees = $reponse->fetch()){
       echo "<option value = $donnees[idCategorie]>", $donnees["nom"],"</option>";
   }

?>

</select> <br>

<input type="file" name="icone" id="pic" /><br />

<button name="modifierArticle">Valider</button>


</form>
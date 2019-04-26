
<form action="index.php?page=ajouterArticle" method="POST">

Nom de l'article : <input type="text" name="nomArticle" required> <br>
Quantité de l'article : <input type="number" name="nombreArticle" required> <br>
Prix unitaire de l'article : <input type="number" name="prixArticle" required> € <br>
Catégorie de l'article : <select name ="categorieArticle" required> <br>

<?php
   $reponse = selectCategorie();
   while($donnees = $reponse->fetch()){
       echo "<option value = $donnees[idCategorie]>", $donnees["nom"],"</option>"; 
   }

?>

</select> <br>

<button name="ajoutArticle">Valider</button>


</form>
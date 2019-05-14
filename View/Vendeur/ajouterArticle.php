
<form action="index.php?page=ajouterArticle" method="POST" enctype="multipart/form-data">
<!-- <input type="hidden" name="MAX_FILE_SIZE" value="12345" /> -->


Nom de l'article : <input type="text" name="nomArticle" required> <br>
Quantité de l'article : <input type="number" name="nombreArticle" required> <br>
Prix au jour de l'article : <input type="number" name="prixArticle" required> € <br>
<?php $y = date('y'); $m = date('m'); $d = date('d');echo $y;?> 
Date de disponibilité : de <input type="date" name="dateDebut" min=<?php echo "20".$y."-".$m."-".$d;?> required>  à <input type="date" name="dateFin" min=<?php echo "20".$y."-".$m."-".$d;?> required> <br>
Catégorie de l'article : <select name ="categorieArticle" required> <br>


<?php
   $reponse = selectCategorie();
   while($donnees = $reponse->fetch()){
       echo "<option value = $donnees[idCategorie]>", $donnees["nom"],"</option>"; 
   }

?>

</select> <br>

<input type="file" name="icone" id="pic" /><br>

<button name="ajoutArticle">Valider</button>


</form>
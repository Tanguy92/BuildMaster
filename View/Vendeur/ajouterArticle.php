

<!-- <input type="hidden" name="MAX_FILE_SIZE" value="12345" /> -->


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="/BuildMaster/View/Css/connexion.css">
  <script src="main.js"></script>
  <script src="View/All/verif.js"></script>
</head>

<body>
  <div class="login-card">

    <H1>Ajouter un article</H1>
    
    <form action="index.php?page=ajouterArticle" method="POST" enctype="multipart/form-data">



      <p>
      Nom de l'article : <input type="text" name="nomArticle" required>
      Quantité de l'article : <input type="number" name="nombreArticle" required><br><br>
       <!-- Votre Pseudo  <input  type="text" name="pseudo" placeholder="Pseudo"> -->
        Prix au jour de l'article : <input type="number" name="prixArticle" required> €<br><br>
        <?php $y = date('y'); $m = date('m'); $d = date('d');echo $y;?> 
Date de disponibilité : de <input type="date" name="dateDebut" min=<?php echo "20".$y."-".$m."-".$d;?> required>  à <input type="date" name="dateFin" min=<?php echo "20".$y."-".$m."-".$d;?> required> <br><br>
Catégorie de l'article : <select name ="categorieArticle" required> <br><br>


<?php
   $reponse = selectCategorie();
   while($donnees = $reponse->fetch()){
       echo "<option value = $donnees[idCategorie]>", $donnees["nom"],"</option>"; 
   }

?>

</select> <br><br>
 Choisir une photo   :<input type="file" name="icone" id="pic" /><br><br>

          <input type="submit" name="ajoutArticle" class="login login-submit" value="Ajouter">

    </form>

  </div>
  </div>

</body>


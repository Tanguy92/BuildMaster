
<form action="index.php?page=modifierArticle" method="POST" enctype="multipart/form-data">
<input type="hidden" name="idProduit" value=<?php echo $idProduit ?>>
<input type="hidden" name="photo" value=<?php echo $photo ?>>



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
  <H1>Modifier un article</H1>
    
    <form action="index.php?page=modifierArticle" method="POST" enctype="multipart/form-data">



      <p>
      
Nom de l'article : <input type="text" value="<?php echo $nom; ?>"" name="nomArticle" required> <br>
Prix unitaire de l'article : <input type="number" value=<?php echo $prix; ?> name="prixArticle" required> € <br>
<?php $y = date('y'); $m = date('m'); $d = date('d');echo $y;?> 
Date de disponibilité : de <input type="date" name="dateDebut" value=<?php echo $dateDebut; ?> min=<?php echo "20".$y."-".$m."-".$d;?> required>  à <input type="date" name="dateFin"  value=<?php echo $dateFin; ?> min=<?php echo "20".$y."-".$m."-".$d;?> required> <br>
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

Description de l'article : <textarea name="description"
                            rows="5" cols="30"><?php echo $description; ?></textarea> <br> <br>

<input type="submit" name="modifierArticle" class="login login-submit" value="Modifier">

    </form>

  </div>
  </div>

</body>

<html>
<link rel="stylesheet" type="text/css" media="screen" href="View/Admin/theme.css">
<script
			  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
			  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
			  crossorigin="anonymous"></script>

<body id="body">
    <br>
        Choisissez les thèmes à rendre disponibles
<section>

    <?php

            $reponse = selectAllCategorie();
            $i=0;
            while($donnees = $reponse->fetch()){
         
?>
<form class="submit" action="index.php?page=categorie" method ="POST">

  <div class="checkbox">
    <div class="figure-container">
      <div class="figure face"></div>
    </div>
    <div class="text" id="<?php $i; ?>">
     <span><input type="radio" id="<?php $i; ?>"
     name="categorie" value="<?php echo $donnees['nom']; ?>"><?php echo $donnees['nom']; ?></span> 
     <input type="hidden" name="supprCategorie" value="<?php echo $donnees['idCategorie']; ?>">
    </div>
  </div>
  <div class="submitt">
      <div class="text">
        <span><button type="submit" value="changer">Rendre indispo</button></span>
      </div>
    </div>
  </form>
  <?php
      $i++;
            }
            ?>

<form class="submit" action="index.php?page=categorie" method ="POST">
    <input type="text" id="head" name="ajoutCategorie">
    <label for="head">Catégorie</label>
    <div class="submitt">
      <div class="text">
        <span><button type="submit" value="changer">Rendre dispo</button></span>
      </div>
    </div>
  </div>
  </form> 
  </body>
</section> 
</html>


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
            $reponse = selectAllTheme();
            $i=0;
            while($donnees = $reponse->fetch()){
         
?>
<form class="submit" action="index.php?page=adminTheme" method ="POST">

  <div class="checkbox">
    <div class="figure-container">
      <div class="figure face"></div>
    </div>
    <div class="text" onclick="changeColor(this.id);" id="<?= $i; ?>">
     <span><input type="radio" id="color<?= $i; ?>"
     name="theme" value="<?php echo $donnees['couleur']; ?>"><?php echo $donnees['nom']; ?></span> 
     <input type="hidden" name="oldColor" value="<?php echo $donnees['idTheme']; ?>">
    </div>
  </div>
  <div class="submitt">
      <div class="text">
        <span><button type="submitt" value="changer">Rendre indispo</button></span>
      </div>
    </div>
  </form>
  <?php
      $i++;
            }
            ?>

<form class="submit" action="index.php?page=adminTheme" method ="POST">
            <input type="text" id="head" name="newColorName" require >
    <input type="color" id="head" name="newColor">
    <label for="head">Head</label>
    <div class="submitt">
      <div class="text">
        <span><button type="submitt" value="changer">Rendre dispo</button></span>
      </div>
    </div>
  </div>
  </form> 
  </body>
</section> 
</html>

<script>

    function changeColor(val)
    {
      document.getElementById('body').style.backgroundColor = document.getElementById('color' + val).value;
    }

</script>
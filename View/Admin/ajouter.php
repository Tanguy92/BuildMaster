<html>
<body>
    <section>
    <form class="submit" action="index.php?page=adminTheme" method="POST"> <!-- Mettre le controlleur en action et pas la vue !!! Envoyer l'ID du thème choisi dans le menu déroulant, soit avec un hidden, soit avec un ?valeur -->
    <?php
    /*
    if ( isset($_POST['Ajouter']) || isset($_POST['Modifier']) || isset($_POST['Supprimer'])) {
        if ( isset($_POST['Ajouter'])) {
            echo "<span><button name=ajout value=", $donnees['idTheme'] ,">",$donnees['nom'] ,"</span>";
        } elseif ( isset($_POST['Modifier'])) {
            echo "<span><input type=checkbox name=modif value=", $donnees['idTheme'] ,">",$donnees['nom'] ,"</span>";
        } else {
            echo "<span><input type=checkbox name=suppr value=", $donnees['idTheme'] ,">",$donnees['nom'] ,"</span>";
        }
    }*/
    ?>
    <br><br>
    </form>
</section>
    
</body>
</html>
<!-- Truc de SID 
<?php 
$i = 0;
?>

  <form>
  <div id="color<?= $i; ?>" style="max-width: 200px;">
  <input type="checkbox" name="color" value="#decba4" id="<?= $i; ?>" <?php $i++; ?>
  onclick="document.getElementById('color'+ this.id).style.backgroundColor = this.value;console.log(this.value)"> Coucou, tu aimes le jaune?
  </div>
  </form>


  $(this).find('.figure-container div').addClass('face').removeClass('entypo-check clicked').animate('slow'); 

  ?>
<script>
  $('.checkbox').on('click', function updateTheme(){
    
    if($(this).find('.figure-container div').hasClass('clicked'))
      {
        
        
 
        
      }else{
      
    $(this).find('.figure-container div').removeClass('face').addClass('entypo-check clicked').animate('slow'); 
    }
  });
</script>
<?php



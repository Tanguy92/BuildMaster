<link rel="stylesheet" href="View/Css/commande.css">

<div class="o-container">

  <section class="c-card c-card--data">
    
    <header class="c-card__header">
      
        <h4 class="c-card__primary-text"><?php echo $donnees2["nom"] ?></h4>

        <h4 class="c-card__primary-text c-card__right"><span class="text-danger text-uppercase"></span></h4>

    </header>
    
    <div class="c-card__body">
      
      <div class="c-card__row c-card__row--segmented">
      
        <div class="c-card__item c-card__item--size-1">
          <p class="btn btn-link"> 
    <?php
    echo "<img src=",$donnees2["photo"]," width=65 height=65 > ";
    ?>
</p>
        </div>

        <div class="c-card__item hidden-xs">
          <h4 class="c-card__primary-text text-right u-pR--huge u-weight--semibold"></h4>
        </div>

        <div class="c-card__item c-card__item--small u-pR--huge">
          <h4 class="c-card__primary-text text-right u-weight--semibold"><?php echo " prix à la journée ",$donnees2["prix"],"€ " ?></h4>
        </div>
        
        <!--<div class="c-card__item c-card__item--button-group">-->
        <form class="c-card__item c-card__item--button-group" action="index.php?page=panier" method="POST">
    Date de votre location : du &nbsp; <input type="date" name="dateDebut" min=<?php echo $donnees2["dateDebut"];?> max=<?php echo $donnees2["dateFin"];?> required> &nbsp; au &nbsp; <input type="date" name="dateFin" min=<?php echo $donnees2["dateDebut"];?> max=<?php echo $donnees2["dateFin"];?> required> &nbsp;
    <?php
    echo " <button class=btn btn-default u-mR name=commander type=submit value=", $donnees2["idProduit"], ">Commander</button>";
    ?>  
    </form> 
    <form class="c-card__item c-card__item--button-group"  action="index.php?page=panier" method="POST">
    <?php
    echo "<button  class=btn btn-default u-mR name=supprimerPanier type=submit value=", $donnees2["idProduit"], ">Supprimer du panier</button>";
    ?>
    </form>    
    </div>

      </div> <!-- End row -->

     
      
    </div>

  </section>

</div>


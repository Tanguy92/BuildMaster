<link rel="stylesheet" href="View/Css/commande.css">

<div class="o-container">

  <section class="c-card c-card--data">
    
    <header class="c-card__header">
      
        <h4 class="c-card__primary-text"><?php echo $donnees3["nom"] ?></h4>

        <h4 class="c-card__primary-text c-card__right">Commande fermée <span class="text-danger text-uppercase"></span></h4>

    </header>
    
    <div class="c-card__body">
      
      <div class="c-card__row c-card__row--segmented">
      
        <div class="c-card__item c-card__item--size-1">
          <p class="btn btn-link"> <?php echo "<img src=",$donnees3["photo"]," width=65 height=65 >"?></p>
        </div>

        <div class="c-card__item hidden-xs">
          <h4 class="c-card__primary-text text-right u-pR--huge u-weight--semibold"></h4>
        </div>

        <div class="c-card__item c-card__item--small u-pR--huge">
          <h4 class="c-card__primary-text text-right u-weight--semibold"><?php echo " prix de l'article au jour : ",$donnees3["prix"],"€" ?></h4>
        </div>
        
        <div class="c-card__item c-card__item--button-group">
        <?php echo "date de réception: ",$donnees3["dateDebut"]," date de rendu : ",$donnees3["dateFin"],"<br>"; ?>
        </div>

      </div> <!-- End row -->

     
      
    </div>

  </section>

</div>

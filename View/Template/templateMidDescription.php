<link rel="stylesheet" type="text/css" media="screen" href="View/Template/cssDescription.css">
<script src="description.js"></script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyBLLLIQ1Mh1k-uEqFG_ZbmKhTFbtTLrjE4
&callback=initMap">
</script>




<div id="container">
    
    <div id="slider">
      <nav class="slide">
        <ul>
          <li><img src=<?php echo $donnees["photo"];?>></li>
          
        </ul>
      </nav>
    </div>
    
    <div id="product-info">
      <h2><?php echo $donnees["nom"];?></h2>
      <p class="price">&euro;<?php echo $donnees["prix"];?> /Jour(s)</p>
      
      <div class="info-wrapper">
        
        <div class="tab">
           <input type="radio" id="tab-1" name="tab-group-1" checked>
           <label for="tab-1"><span>Description</span></label>
           
          <div class="content">
            <p><?php echo $donnees["description"];?></p>
          </div> 
        </div>

        <div class="tab">
          <input type="radio" id="tab-2" name="tab-group-1">
          <label for="tab-2"><span>Localisation</span></label>

          <div class="content">
            <?php echo $donnees["adresse"];?>
         
          
            <link rel="stylesheet" type="text/css" media="screen" href="View/Template/cssmap.css">
           
          <div id="map">
          <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 48.8534, lng: 2.3488},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLLLIQ1Mh1k-uEqFG_ZbmKhTFbtTLrjE4&callback=initMap"
    async defer></script>
          </div>
    
    
          
          </div>
        </div>
        
      </div>
      </div> 
      <div class="buy">
        <form action="index.php?page=description" method="POST">
          <input type="hidden" name="prix" value = <?php echo $donnees["prix"]; ?>>
          <?php echo "<button class=chart name=ajoutPanier type=submit value=", $donnees["idProduit"], ">Ajouter au panier</button>"; ?>
        </form>
      </div>

      <?php
      if (isset($_SESSION['id'])) { ?>
      <div class="buy">
        <form action="index.php" method="GET">
          <input type="hidden" name="destinataire" value = <?php echo $vendeur; ?>>
          <input type="hidden" name="page" value ='conversation'>
          <button class="chart" type="submit">Contacter le vendeur</button>
        </form>
      </div>
      <?php } ?>
    </div>
    
  </div>

  <!-- <link rel="stylesheet" type="text/css" media="screen" href="View/Template/cssmap.css">
          <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>
   
          <div id="mapid"></div>
          <script type="text/javascript" src="apiMaps.js"></script> -->
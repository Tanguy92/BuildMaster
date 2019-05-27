<link rel="stylesheet" type="text/css" media="screen" href="View/Template/cssDescription.css">
<script src="description.js"></script>

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
            <p>Description</p>
          </div> 
        </div>

        <div class="tab">
          <input type="radio" id="tab-2" name="tab-group-1">
          <label for="tab-2"><span>Localisation</span></label>

          <div class="content">
         
          
            <link rel="stylesheet" type="text/css" media="screen" href="View/Template/cssmap.css">
           
            <div id="map"></div>
            <script src="apiMaps.js"></script>

  

               
              <!-- <li>In euismod nibh in finibus rhoncus</li>
              <li>Donec cursus purus vitae purus</li> -->
          
          </div>
        </div>
        
      </div>
      
      <div class="buy">
        <button class="chart">Ajouter au Pannier</button>
      </div>
      
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
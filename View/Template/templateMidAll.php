<?php
include("Modele/connectBDD.php");
  //include("Modele/select.php");
// include("Modele/insert.php");
?>
<main>
    <section class="kvsection">
        <div class="kv">
            <h1>Rechercher un article</h1>
            <p class="introcopy">
                <form id="searchthis" action="index.php?page=search" style="display:inline;" method="POST">
                  
                    <input id="namanyay-search-box" name="search" size="80" type="text" required placeholder="Rechercher un article" />
                    <input id="namanyay-search-btn" value="Rechercher" type="submit" />
                </form>
            
        <!-- <div class="kvsubbox">
            <div class="kvsub-lef</div>t">
                <h2>Missie</h2>
                <p>De beleving tussen mensen en websites verbeteren.</h2>
            </div>
            <div class="kvsub-right">
                <h2>Kenmerken</h2>
                <p>Snelle communicatie, nuchterheid en kennis van zaken.</p>
            </div>
        </div> -->

    <!--Changing the number in the column_# class changes the number of columns-->
    
  
    <link rel="stylesheet" type="text/css" media="screen" href="View/Template/categorie.css">
    <ul class="navbar">

 

<form id="searchthis" action="index.php?page=search" style="display:inline;" method="POST">
      <?php  $selectCategorie = selectAllCategorie();
        while ($donnees3 = $selectCategorie->fetch()) {
            $idCategorie = $donnees3["idCategorie"];
            $nom = $donnees3["nom"];
         ?>
         <li class="navbar"><button name ="categorie" value = <?php echo $idCategorie; ?>><a   name ="categorie" value = <?php echo $idCategorie; ?> ><?php echo $nom; ?></a></button></li>
       
        <?php } ?>
    </form>
    </ul>
 
    </p>
           <!-- <a class="abutton" href="#">Onze diensten</a> -->

        </div>





    <link rel="stylesheet" type="text/css" media="screen" href="View/Template/cssMonSiteArticle.css">
<body>
	<div id="wrap">
	<div id="columns" class="columns_4">
        
<H2>Articles</H1>
<?php

$reponse = Tanguy();


while ($donnees = $reponse->fetch()) {
    include("Controleur/Client/function.php");
    // echo $donnees["prix"];
    
}

//   <figure>
//   <img src="https://i.imgur.com/ruU04I6.jpg">
// 	<figcaption>Green Checkered Shirt</figcaption>
//     <span class="price">$44</span>
//     <a class="button" href="#">Book Now</a>
// 	</figure>
	
// 	<figure>
// 	<img src="https://i.imgur.com/sPxEkEI.jpg">
// 	<figcaption>Green and Black Flowers</figcaption>
//     <span class="price">$44</span>
//     <a class="button" href="#">Book Now</a>
// 	</figure>
	
//   <figure>
// 	<img src="https://i.imgur.com/S3Umfmb.jpg">
// 	<figcaption>Black Dots</figcaption>
//     <span class="price">$44</span>
//     <a class="button" href="#">Book Now</a>
// 	</figure>
  
// 	<figure>
// 	<img src="https://i.imgur.com/x1IZjjy.jpg">
// 	<figcaption>Red Flowy</figcaption>
//     <span class="price">$44</span>
//     <a class="button" href="#">Book Now</a>
// 	</figure>
	
//    <figure>
// 	 <img src="https://i.imgur.com/Jv8IWKQ.jpg">
// 	<figcaption>Yellow Button-Up</figcaption>
//     <span class="price">$44</span>
//     <a class="button" href="#">Book Now</a>
// 	</figure>
	
//    <figure>
// 	 <img src="https://i.imgur.com/MpLejRu.jpg">
// 	<figcaption>Put a Bird On It</figcaption>
//      <span class="price">$44</span>
//      <a class="button" href="#">Book Now</a>
// 	</figure>
  
// </body>
?>

<H2>Magasins</H1>
<?php

$reponse = TanguyMagasin();


while ($donnees = $reponse->fetch()) {
    include("Controleur/Client/functionMagasin.php");
    // echo $donnees["prix"];
    
}
?>



<?php
include("Modele/connectBDD.php");
  //include("Modele/select.php");
// include("Modele/insert.php");
?>
<main>
    <section class="kvsection">
       
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

    <link rel="stylesheet" type="text/css" media="screen" href="View/Template/cssMonSiteArticle.css">
    <link rel="stylesheet" type="text/css" media="screen" href="View/Template/categorie.css">
<body>
	<div id="wrap">
	<div id="columns" class="columns_4">
        <br>
        <br>
        <br>
        <br>
        <br>
       <?php echo '<a href="index.php?page=ajouterArticle">Ajouter un article</a>'; ?>

<H2> Mes articles</H2>
<?php



while ($donnees = $reponse->fetch()) {
    include("Controleur/Client/function2.php");
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


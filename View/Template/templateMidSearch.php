<?php
include("Modele/connectBDD.php");
// include("Modele/select.php");
// include("Modele/insert.php");
?>
<main>
    <section class="kvsection">
        <div class="kv">
            <h1>Rechercher un article</h1>
            <p class="introcopy">
                <form id="searchthis" action="index.php?page=search" style="display:inline;" method="POST">
                  
                    <input id="namanyay-search-box" name="search" size="80" type="text" placeholder="Rechercher un article" required />
                    <input id="namanyay-search-btn" value="Rechercher" type="submit" />
                </form>
            </p>
           <!-- <a class="abutton" href="#">Onze diensten</a> -->

        </div>
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
   
<body>
    <form id="searchthis" action="index.php?page=search" style="display:inline;" method="POST">
      <?php  $selectCategorie = selectAllCategorie();
        while ($donnees3 = $selectCategorie->fetch()) {
            $idCategorie = $donnees3["idCategorie"];
            $nom = $donnees3["nom"];
         ?>
        <button name ="categorie" value = <?php echo $idCategorie; ?> ><?php echo $nom; ?></button>
        <?php } ?>
    </form>
	<div id="wrap">
	<div id="columns" class="columns_4">
    <h2> Articles</h2>

<?php


//if(isset($_SESSION["search"])){

while ($donnees = $reponse->fetch()) {
    include("Controleur/Client/function.php");
    // echo $donnees["prix"];

}

while ($donnees = $reponse3->fetch()) {
    include("Controleur/Client/function.php");
    // echo $donnees["prix"];

}
?>

<H2>Magasin</H1>
<?php
while ($donnees = $reponse2->fetch()) {
    include("Controleur/Client/functionMagasin.php");
    // echo $donnees["prix"];
    
}

?>


  


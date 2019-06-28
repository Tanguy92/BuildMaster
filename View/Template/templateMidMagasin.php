
    <style>
</style>
    
    <main>
        <section class="kvsection">
            <div class="kv" id="blah">

                <p class="introcopy"></p>
                <!--<a class="abutton" href="#">Onze diensten</a>-->
            </div>
            <div class="kvsubbox">
                <div class="kvsub-left">
                    <h2><?php echo $magasin;?> </h2>
                </div>
               
                </div>
            </div>
        </section>

       


<link rel="stylesheet" type="text/css" media="screen" href="View/Template/cssMonSiteArticle.css">
<body>
	<div id="wrap">
	<div id="columns" class="columns_4">

<?php



$reponse = articleMagasin($idMagasin);


while ($donnees = $reponse->fetch()) {
    include("Controleur/Client/function.php");
  
    
}
?>
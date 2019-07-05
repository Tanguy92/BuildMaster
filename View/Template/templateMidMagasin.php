<link rel="stylesheet" type="text/css" media="screen" href="View/Template/categorie.css">
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

        <?php if (isset($_SESSION['id'])) { ?>
        <form action="index.php" method="GET">
          <input type="hidden" name="compte" value = <?php echo $idMagasin; ?>>
          <input type="hidden" name="page" value="signaler2">
          <button type="submit">Signaler</button>
        </form>

        
        <form action="index.php" method="GET">
            <link rel="stylesheet" type="text/css" media="screen" href="View/Template/cssNote.css">
            <input type="hidden" name="page" value="noter2">
            <input type="hidden" name="vendeur" value = <?php echo $idMagasin; ?>>
        
            <div class="colonne">
            <h2>Vous lui donnez | 10 </h2>

            <fieldset class="rate">
                <input id="rate3-star10" type="radio" name="note" value="5" />
                <label for="rate3-star10" title="Merveilleux">10</label>

                <input id="rate3-star9" type="radio" name="note" value="9" />
                <label for="rate3-star9" title="Excellent">9</label>

                <input id="rate3-star8" type="radio" name="note" value="8" />
                <label for="rate3-star8" title="Très bien">8</label>

                <input id="rate3-star7" type="radio" name="note" value="7" />
                <label for="rate3-star7" title="Bien">7</label>

                <input id="rate3-star6" type="radio" name="note" value="6" />
                <label for="rate3-star6" title="Satisfaisant">6</label>

                <input id="rate3-star5" type="radio" name="note" value="5" />
                <label for="rate3-star5" title="Pas Satisfaisant">5</label>

                <input id="rate3-star4" type="radio" name="note" value="4" />
                <label for="rate3-star4" title="Mauvais">4</label>

                <input id="rate3-star3" type="radio" name="note" value="3" />
                <label for="rate3-star3" title="Très mauvais">3</label>

                <input id="rate3-star2" type="radio" name="note" value="2" />
                <label for="rate3-star2" title="Mediocre">2</label>

                <input id="rate3-star1" type="radio" name="note" value="1" />
                <label for="rate3-star1" title="Inacceptable">1</label>
            </fieldset>
            </div>
        
            <button type="submit">Noter</button>
        </form>

        <?php } ?>
       


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
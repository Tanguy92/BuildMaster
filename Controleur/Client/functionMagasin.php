<?php


echo"
<figure>
<form action ='index.php?page=monMagasin' method='POST'>
<input name='idProduit' type='button' value='",$donnees['idMembre'],"'>
        <img src=",'https://comps.canstockphoto.fr/poney-dessin-anim%C3%A9-vecteur-eps_csp23103085.jpg',">
          <figcaption>",$donnees['magasin'],"</figcaption>
          <button name = idMembre value=",$donnees['idMembre'],">Consulter</button>
        
       
          </figure>
          </form>";
          


      
?>



<!-- 
    echo"
<figure>
<form action ='index.php?page=description' method='POST'>
        <img src=",$donnees['logo'],">
          <figcaption>",$donnees['magasin'],"</figcaption>
        
       
          </figure>
          </form>";
             
 -->
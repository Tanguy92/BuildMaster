<?php


echo"
<figure>
<form action ='index.php?page=monMagasin' method='POST'>
<input name='idProduit' type='button' value='",$donnees['idMembre'],"'>
        <img src=",'https://res.cloudinary.com/teepublic/image/private/s--le_kyU3I--/t_Preview/b_rgb:191919,c_limit,f_jpg,h_630,q_90,w_630/v1526180591/production/designs/2680826_0.jpg',">
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
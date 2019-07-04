<?php




if(isset($donnees["count(*)"])){
  if($donnees["count(*)"] == 0  ){
      echo "Il n'y a pas de magasins qui correspond à votre recherche.";
  }
} else{
  echo"
<figure>
<form action ='index.php?page=monMagasin' method='POST'>
        <img src=",$donnees["logo"],">
          <figcaption>",$donnees['magasin'],"</figcaption>
          <button name = idMembre value=",$donnees['idMembre'],">Consulter</button>
        
       
          </figure>
          </form>";

}
               
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
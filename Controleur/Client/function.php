<?php


echo"
<figure>
<form action ='index.php?page=description' method='POST'>

        <img src=",$donnees['photo'],">
          <figcaption>",$donnees['nom'],"</figcaption>
          <span class=","'price'",">",$donnees['prix'],"</span>
          <button name = idProduit value=",$donnees['idProduit'],">Consulter</button>
       
          </figure>
          </form>";
          

          $_SESSION["articleNom"] = $donnees["nom"];
          $_SESSION["articlePrix"]=$donnees["prix"];
          $_SESSION["articlePhoto"]=$donnees["photo"];

      
?>



<!-- 
       
echo"
  <a class=","'button'"," href=",'index.php?page=description',">Consulter</a>
<figure>
        <img src=",$donnees['photo'],">
          <figcaption>",$donnees['nom'],"</figcaption>
          <span class=","'price'",">",$donnees['prix'],"</span>
          <a class=","'button'"," href=",'index.php?page=description',">Consulter</a>
          </figure>";
          

          $_SESSION["articleNom"] = $donnees["nom"];
          $_SESSION["articlePrix"]=$donnees["prix"];
          $_SESSION["articlePhoto"]=$donnees["photo"]; -->
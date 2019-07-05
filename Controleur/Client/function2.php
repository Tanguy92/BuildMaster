<?php
echo"
<figure>
<form action ='index.php?page=modifierArticle' method='POST'>
        <img src=",$donnees['photo'],">
          <figcaption>",$donnees['nom'],"</figcaption>
          <span class=","'price'",">",$donnees['prix'],"€</span>
          <button name =modifier value=",$donnees['idProduit'],">Modifier</button>
          </form>
          <br>
          <form action ='index.php?page=articleVendeur' method='POST'>
          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          <button name =supprimer value=",$donnees['idProduit'],">Supprimer</button>
          </form>
          <form action ='index.php?page=description' method='POST'>
          
          
          </figure>
          </form>";
          

          $_SESSION["articleNom"] = $donnees["nom"];
          $_SESSION["articlePrix"]=$donnees["prix"];
          $_SESSION["articlePhoto"]=$donnees["photo"];

          
?>

      

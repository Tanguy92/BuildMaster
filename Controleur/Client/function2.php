<?php
echo"
<figure>
<form action ='index.php?page=modifierArticle' method='POST'>
<input name='idProduit' type='button' value='",$donnees['idProduit'],"'>
        <img src=",$donnees['photo'],">
          <figcaption>",$donnees['nom'],"</figcaption>
          <span class=","'price'",">",$donnees['prix'],"</span>
          <button name =modifier value=",$donnees['idProduit'],">Modifier</button>
          </form>
          <form action ='index.php?page=articleVendeur' method='POST'>
          <button name =supprimer value=",$donnees['idProduit'],">Supprimer</button>
          </form>
          <form action ='index.php?page=description' method='POST'>
          <button name = idProduit value=",$donnees['idProduit'],">Consulter</button>
          
          </figure>
          </form>";
          

          $_SESSION["articleNom"] = $donnees["nom"];
          $_SESSION["articlePrix"]=$donnees["prix"];
          $_SESSION["articlePhoto"]=$donnees["photo"];

          
?>

      

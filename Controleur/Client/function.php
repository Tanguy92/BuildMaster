<?php



          

          $_SESSION["articleNom"] = $donnees["nom"];
          $_SESSION["articlePrix"]=$donnees["prix"];
          $_SESSION["articlePhoto"]=$donnees["photo"];

          if(isset($donnees["count(*)"])){
            if($donnees["count(*)"] == 0 && !isset($_POST["categorie"]) ){
                echo "Il n'y a pas d'articles qui correspond à votre recherche.";
            } else if(isset($_POST["search"])){
              echo"
              <figure>
              <form action ='index.php?page=description' method='POST'>
              
                      <img src=",$donnees['photo'],">
                        <figcaption>",$donnees['nom'],"</figcaption>
                        <span class=","'price'",">",$donnees['prix'],"€</span>
                        <button name = idProduit value=",$donnees['idProduit'],">Consulter</button>
                     
                        </figure>
                        </form>";
            }
          } else{
            echo"
            <figure>
            <form action ='index.php?page=description' method='POST'>
            
                    <img src=",$donnees['photo'],">
                      <figcaption>",$donnees['nom'],"</figcaption>
                      <span class=","'price'",">",$donnees['prix'],"€</span>
                      <button name = idProduit value=",$donnees['idProduit'],">Consulter</button>
                   
                      </figure>
                      </form>";
          }
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
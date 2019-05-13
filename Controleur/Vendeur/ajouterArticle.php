<?php
include("View/Template/templateTop.html");
include("Modele/select.php");
include("View/Vendeur/ajouterArticle.php");

?>


<?php

$reponse = selectIdMembre();

while ($donnees = $reponse->fetch()) {
    $idMembre = $donnees["idMembre"];
}

$echec = false;

if(!empty($_FILES['icone']))
{
    $dir = "View/Image/";
    if(!is_dir($dir))
    {
        mkdir($dir);
    }
    if($_FILES['icone']['type'] != ""){
        if( !strstr($_FILES['icone']['type'], 'jpg') && !strstr($_FILES['icone']['type'], 'jpeg') && !strstr($_FILES['icone']['type'], 'png')){
            echo "Ce n'est pas un fichier au format valide";
            $echec = true;
            } 
    }
    if($echec != true){
        if($_FILES['icone']['name'] == ""){
            $path = "View/Image/base.jpg";
        }else {
            $path = $dir.basename($_FILES['icone']['name']);
        }  
        if(move_uploaded_file($_FILES['icone']['tmp_name'],$path)){
        }
    }
    
}


if($echec != true){
    if (isset($_POST["ajoutArticle"])) {
        include("Modele/insert.php");

        if(!empty($_POST['prixArticle'])){
            $prix = $_POST['prixArticle'];
            $quantite = $_POST['nombreArticle'];
            $nom = $_POST['nomArticle'];
            $categorie = $_POST['categorieArticle'];

        }
        for ($i=1; $i <= $quantite ; $i++) { 
            if(insertArticle($nom,$prix,$categorie,$path) ){
                $reponse1 = selectDernierArticle();

                while ($donnees1 = $reponse1->fetch()) {
                    $idProduit = $donnees1["MAX(idProduit)"];
                }           
                insertAppartenance($idMembre,$idProduit);
            }
            if ($i == $quantite) {
             header("refresh:0;url=index.php?page=articleVendeur");
            }   
        }
    }
}
   
   




?>
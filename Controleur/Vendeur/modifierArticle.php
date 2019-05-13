<?php
include("View/Template/templateTop.html");
include("Modele/select.php");
include("Modele/update.php");


if (isset($_POST["modifier"])){
    $reponse = selectModifierArticle();

    while ($donnees = $reponse->fetch()) {
        $nom = $donnees["nom"];
        $prix = $donnees["prix"];
        $photo = $donnees["photo"];
        $idCategorie = $donnees["idCategorie"];
        $nomCate = $donnees["nomCate"];
        $idProduit = $donnees["idProduit"];
    }
    include("View/Vendeur/modifierArticle.php");
}

if (isset($_POST["modifierArticle"])) {
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
            echo "Ce n'est pas un fichier au format valide, la modification n'a pas eu lieu";
            header("refresh:1;url=index.php?page=articleVendeur");
            $echec = true;
        } 
    }
    if($echec != true){
        if($_FILES['icone']['name'] == ""){
            $photo = $_POST["photo"];
        }else {
            $photo = $dir.basename($_FILES['icone']['name']);
        }  
        if(move_uploaded_file($_FILES['icone']['tmp_name'],$photo)){
        }
    

        $nom = $_POST['nomArticle'];
        $prix = $_POST['prixArticle']; 
        $categorie = $_POST['categorieArticle'];


        if(updateArticle($nom,$prix,$categorie,$photo)){
            header("refresh:0;url=index.php?page=articleVendeur");
        }
    }
}
}


?>
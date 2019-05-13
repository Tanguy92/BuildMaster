<?php
include("Modele/connectBDD.php");
include("Modele/insert.php");
include("Modele/select.php");
include("Controleur/Vendeur/function.php");
// var_dump($_FILES);







// Browse image 
if(!empty($_FILES['avatar']))
{   
    $dir = "./View/Image/";
    if(!is_dir($dir))
    {
        mkdir($dir);
    }
    
    $path = $dir.basename($_FILES['avatar']['name']);

    if(move_uploaded_file($_FILES['avatar']['tmp_name'],$path))
    {
        // echo 'fichier déplacé';
        
        updatePc($path) ;
    }
    
   
}

$bdd = $GLOBALS["bdd"];
$reponse4 = $bdd->prepare("SELECT membre.photo FROM `membre` WHERE mail LIKE :mail");
$reponse4->execute(array(
    'mail' => $_SESSION['mail']
));


while ($donnees4 = $reponse4->fetch()) {
    $chemin = $donnees4['photo'];

}





include("View/Template/templateMonSite.php");

?>
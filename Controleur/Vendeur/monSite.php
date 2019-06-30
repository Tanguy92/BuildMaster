<?php
include("Modele/connectBDD.php");
include("Modele/insert.php");
include("Modele/select.php");
include("Controleur/Vendeur/function.php");

// Browse image 
if(!empty($_FILES['photo']))
{   
    $dir = "./View/Images/";
    if(!is_dir($dir))
    {
        mkdir($dir);
    }
    
    $path = $dir.basename($_FILES['photo']['name']);

    if(move_uploaded_file($_FILES['photo']['tmp_name'],$path))
    {
        //echo '<script>alert("fichier déplacé");</script>';
        
        updatePc($path) ;
    } else {
        //echo '<script>alert("fichier non déplacé");</script>';

    } 
}
if(!empty($_FILES['logo']))
{   
    $dir = "./View/Images/";
    if(!is_dir($dir))
    {
        mkdir($dir);
    }
    
    $path = $dir.basename($_FILES['logo']['name']);

    if(move_uploaded_file($_FILES['logo']['tmp_name'],$path))
    {
        //echo '<script>alert("fichier déplacé");</script>';
        
        updatePc2($path) ;
    } else {
        //echo '<script>alert("fichier non déplacé");</script>';

    }  
}
if(isset($_POST['color'])) {
    $color = $_POST['color'];


$reponse= idTheme2($color);
while ($donnees = $reponse->fetch()) {
    $s1= $donnees['idTheme'];
}

$reponse=selectIdMembre();
while ($donnees = $reponse->fetch()) {
    $s2= $donnees['idMembre'];
    $logo = $donnees['logo'];
   
}
 $toto = updateTheme($s1,$s2);
}

$mail =  $_SESSION['mail'];
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
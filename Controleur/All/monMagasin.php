<?php
// include("Modele/connectBDD.php");
include("Modele/select.php");
include("Modele/insert.php");

$selectidMembre = selectIdMembre();
while ($donnees3 = $selectidMembre->fetch()) {
    $statut = $donnees3["statut"]; 
    $idMembre = $donnees3["idMembre"];
}

if(isset($statut)){

    if($statut == "v"){
        include('View/Template/templateTop.html');
    }elseif ($statut == "c") {
        include("View/Template/templateTopAllClient.php");
    } 
}   else {
  include("View/Template/templateTopAllMagasin.html");
}



$idMagasin=$_POST["idMembre"];
$reponse =descriptionMagasin($idMagasin);

 while ($donnees = $reponse->fetch()) {  
   
    $chemin = $donnees["photo"];
    $idTheme = $donnees["idTheme"];
   
    $magasin = $donnees["magasin"];
    
 }


 $reponse = couleurCss($idTheme);
 
 while ($donnees2 = $reponse->fetch()) {  
   $couleur = $donnees2["couleur"];
    
 }



    echo  '<style>
    .kv {
        color: #fff;
        min-height: 400px;
        padding: 50px 100px;
        background-image: url("',$chemin,'");
        background-size: cover;
    }

     
  body{
    background-color:',$couleur,';
    height:100%;
    font-family:sans-serif;
  
  }
</style>';


 include("View/Template/templateMidMagasin.php");
 


 
 
?>


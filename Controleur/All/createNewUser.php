<?php
include("Modele/connectBDD.php");
include("View/Template/templateTopAll.html");
include("Modele/select.php");


$_SESSION['pass'] = $_POST['pass'];
$_SESSION['grade'] = $_POST['grade'];
$_SESSION['mail'] = $_POST['mail'];
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];

$nom =   $_SESSION['nom'];
$prenom =   $_SESSION['prenom'];
$mail =  $_SESSION['mail'];
$grade =$_SESSION['grade'];
$pass =$_SESSION['pass'];
if(isset($_SESSION['adresse'])){
    $adresse =$_SESSION['adresse'];
}

$reponse =check($mail);
while ($donnees = $reponse->fetch()) {
    $var = intval($donnees["count(*)"]);
    echo $var;
    
    if ($var != 0 ){
        header ("refresh:0;url=index.php?page=mail2");
    }else 
    {
        if(stristr($mail,"@")){
            // Condition Vendeur 
                if ($grade == "v"){
                    include("View/All/newUserV.html");           
                }elseif ($grade == "c"){
                    header ("refresh:0;url=index.php?page=createNewUser2");
              
            }
            }else{
                header ("refresh:0;url=index.php?page=mail");
                }
    }
}



// if (stristr($mail,"@")){
// // Condition Vendeur 
//     if ($grade == "v"){
//         include("View/All/newUserV.html");           
//     }elseif ($grade == "c"){
//         header ("refresh:0;url=index.php?page=createNewUser2");
  
// }
// }else{
//     header ("refresh:0;url=index.php?page=mail");
//     }
?>

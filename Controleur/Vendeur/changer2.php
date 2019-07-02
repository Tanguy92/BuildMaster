<?php

include('Modele/select.php');
$moi = $_SESSION['id'];			
$idMembre = selectSpecMembre($moi);
        $statut = $idMembre["statut"];
    
if($statut == "v"){
	include('View/Template/templateTopMessage.html');
}elseif ($statut == "c") {
	include("View/Template/templateTopAllClientMessage.php");
} else {
	include("View/Template/templateTopAdminMessage.html");
}

include('Modele/insert.php');

//Recuperer les infos de la personne de la bdd
$s = selectSpecMembre($_SESSION['id']);
$mot = $s['mdp'];
$motOld = md5($_POST['motOld']);
$o = strlen($mot);
$u = strlen($motOld);
$seller = $_SESSION['id'];

if ($o == $u AND $mot == $motOld) {

    //Si il a modifie son mail
    if ($_POST['mail'] != "" AND strlen($_POST['mail']) >= 2) {
        
        //update le mail dans la bdd
        $mail =  $_POST['mail'];
        $actu = updateMail($mail, $seller);

    }

    //Si il a modifie son mot de passe
    if ($_POST['mot'] != "") {
        
    

        $o = strlen($_POST['mot']);
        $u = strlen($_POST['mot2']);

        if ($_POST['mot'] == $_POST['mot2'] AND $o == $u AND $_POST['mot'] != "" AND $_POST['mot'] != " " AND $o != 2) {
        
            //update le mot de passe dans la bdd
            $confirme = md5($_POST['mot']);
            $actu = updateMdp($confirme, $seller);

        }   else {

            include('View/Vendeur/pasConf.php');

        }
    }

    //Si il a modifie son adresse
    if ($_POST['adresse'] != "" AND $_POST['adresse'] != " " AND strlen($_POST['adresse']) >= 3) {
        
        //update le mail dans la bdd
        $localisation = $_POST['adresse'];
        $actu = updateAdresse($localisation, $seller);


    }

    //Si il a modifie son nom de magasin
if(isset($_POST["magasin"])){
    if ($_POST['magasin'] != "" AND $_POST['magasin'] != " " AND strlen($_POST['magasin']) >= 3) {
        
        //update le mail dans la bdd
        $m = $_POST['magasin'];
        $actu = updateMagasin($m, $seller);


    }
}
    
    include('View/Vendeur/bien.php');
    header("refresh:1;url=index.php?page=deconnexion");

}   else {

    include('View/Vendeur/pasBien.php');

}

?>
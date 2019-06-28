<?php
include('View/Template/templateTopAllClient.php');
include('Modele/select.php');
include('Modele/insert.php');

//Recuperer les infos de la personne de la bdd
$s = selectSpecMembre($_SESSION['id']);
$mot = $s['mdp'];
$motOld = md5($_GET['motOld']);
$o = strlen($mot);
$u = strlen($motOld);
$seller = $_SESSION['id'];

if ($o == $u AND $mot == $motOld) {

    //Si il a modifie son mail
    if ($_GET['mail'] != "" AND strlen($_GET['mail']) >= 2) {
        
        //update le mail dans la bdd
        $mail =  $_GET['mail'] . $_GET['domaine'];
        $actu = updateMail($mail, $seller);

    }

    //Si il a modifie son mot de passe
    if ($_GET['mot'] != "") {
        
    

        $o = strlen($_GET['mot']);
        $u = strlen($_GET['mot2']);

        if ($_GET['mot'] == $_GET['mot2'] AND $o == $u AND $_GET['mot'] != "" AND $_GET['mot'] != " " AND $o != 2) {
        
            //update le mot de passe dans la bdd
            $confirme = md5($_GET['mot']);
            $actu = updateMdp($confirme, $seller);

        }   else {

            include('View/Vendeur/pasConf.php');

        }
    }

    //Si il a modifie son adresse
    if ($_GET['adresse'] != "" AND $_GET['adresse'] != " " AND strlen($_GET['adresse']) >= 3) {
        
        //update le mail dans la bdd
        $localisation = $_GET['adresse'];
        $actu = updateAdresse($localisation, $seller);


    }

    //Si il a modifie son nom de magasin
if(isset($_GET["magasin"])){
    if ($_GET['magasin'] != "" AND $_GET['magasin'] != " " AND strlen($_GET['magasin']) >= 3) {
        
        //update le mail dans la bdd
        $m = $_GET['magasin'];
        $actu = updateMagasin($m, $seller);


    }
}
    
    include('View/Vendeur/bien.php');
    header("refresh:1;url=index.php?page=deconnexion");

}   else {

    include('View/Vendeur/pasBien.php');

}

?>
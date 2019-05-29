<?php
 include('View/Template/templateTop.html');
 include('Modele/delete.php');
 include('Modele/select.php');
 
//Supprimer tous les messages à lui
$moi = $_GET["profil"];
$mes = selectMessage($bdd);

for ($i = 0; $i < count($mes)-1; $i++) {
    if ($mes[$i]['expediteur'] == $moi OR $mes[$i]['destinataire'] == $moi) {
        $del = deleteMessage($mes[$i]['idMessagerie']);
    }
}

//Sup son compte de la table appartenance et ses produits egalement
$ap = selectAppartenance($bdd);

for ($i = 0; $i < count($ap)-1; $i++) {
    if ($ap[$i]['idMembre'] == $moi) {
        $prod = $ap[$i]['idProduit'];
        $idA = $ap[$i]['idAppartenance'];

        $ip = deleteArticleA($prod);
        $ia = deleteApp($idA);
              
    }
}

//Sup son compte de la table notes
$ap = selectNotes($bdd);

for ($i = 0; $i < count($ap)-1; $i++) {
    if ($ap[$i]['idMembre'] == $moi) {
        $idN = $ap[$i]['idNotes'];

        $ip = deleteNote($idN);
        
    }
}

//Supprimer le compte qui a plus de 6 signalements
$del = deleteSignale($_GET["profil"]);

include('View/Vendeur/okSup.php');

?>
<?php
 include("View/Template/templateTopAdmin.html");
 include('Modele/delete.php');
 include('Modele/select.php');
 
//Supprimer tous les messages à lui
$moi = $_GET["profil"];
$mes = selectMessageSup($moi);

for ($i = 0; $i < count($mes)-1; $i++) {
    $del = deleteMessage($mes[$i]['idMessagerie']);
}

//Sup son compte de la table appartenance et ses produits egalement
$ap = selectAppartenance($bdd);

for ($i = 0; $i < count($ap)-1; $i++) {
    if ($ap[$i]['idMembre'] == $moi) {
        $prod = $ap[$i]['idProduit'];
        $idA = $ap[$i]['idAppartenance'];

        $ia = deleteApp($idA);
        $ip = deleteArticleA($prod);
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
$del = deleteCommandeA($moi);

//Supprimer le compte qui a plus de 6 signalements
$del = deleteSignale($_GET["profil"]);

include('View/Vendeur/okSup.php');

?>
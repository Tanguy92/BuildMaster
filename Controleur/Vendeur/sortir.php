<?php    
    include('View/Vendeur/templateTmp.php');
    include('Modele/delete.php');
    include('Modele/select.php');

    //Recuperer les infos de la personne de la bdd
    $s = selectSpecMembre($_SESSION['id']);
    $mot = $s['mdp'];
    $motOld = $_GET['motOld'];
    $o = strlen($mot);
    $u = strlen($motOld);

    if ($o == $u AND $mot == $motOld) {

        //Delete ses messages
        $moi = $_SESSION['id'];  
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

        //Supprimer le compte
        $del = deleteSignale($moi);

        include('View/Vendeur/sortir.php');

    }   else {

        include('View/Vendeur/pasBien.php');

    }

?>
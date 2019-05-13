<?php    
    include('View/Template/templateTop.html');
    include('Modele/delete.php');
    include('Modele/select.php');

    //Supprimer le compte qui a plus de 6 signalements
    $del = deleteSignale($_GET["profil"]);
   
    
    //Supprimer tous les messages à lui
    $moi = $_GET["profil"];
    $mes = selectMessage($bdd);
      for ($i = 0; $i < count($mes)-1; $i++) {
        if ($mes[$i]['expediteur'] == $moi OR $mes[$i]['destinataire'] == $moi) {
            $del = deleteMessage($mes[$i]['idMessagerie']);
        }
    }

    //Delete le message entre l'admin et le systeme dont on lui dit de supprimer le compte
    $id = $_GET["id"];
    $del = deleteMessage($i);

    include('View/Vendeur/okSup.php');
?>
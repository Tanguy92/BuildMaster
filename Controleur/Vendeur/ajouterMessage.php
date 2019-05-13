<?php
if (!empty($_GET['message'])) {
    
    include('Modele/insert.php');

    $conf = insertMessage($_GET['message'], $_SESSION['id'], $_SESSION['toi']);
    include('Controleur/Vendeur/conversation.php');
}
?>

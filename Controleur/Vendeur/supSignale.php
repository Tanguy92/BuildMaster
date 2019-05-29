<?php    
   
     //Sup le compte et les messages a lui
     include('Controleur/Admin/supCompte.php');

      //Delete le message entre l'admin et le systeme dont on lui dit de supprimer le compte
    $id = $_GET["id"];
    $del = deleteMessage($id);
?>
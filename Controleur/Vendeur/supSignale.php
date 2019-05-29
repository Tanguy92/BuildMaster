<?php    
<<<<<<< HEAD
   
     //Sup le compte et les messages a lui
     include('Controleur/Admin/supCompte.php');
=======
    //Sup le compte et les messages a lui
    include('Controleur/Admin/supCompte.php');
>>>>>>> d957945c73662f8afbd6a2d42296040cfc57ea9f

      //Delete le message entre l'admin et le systeme dont on lui dit de supprimer le compte
    $id = $_GET["id"];
    $del = deleteMessage($id);
<<<<<<< HEAD
?>
=======
?>
>>>>>>> d957945c73662f8afbd6a2d42296040cfc57ea9f

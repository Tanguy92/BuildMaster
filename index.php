<?php
session_start();
include("/BuildMaster/Modele/ConnectBDD.php");


if (!isset($_GET['page'])) {
    include('Controleur/Vendeur/acceuil.php');
} else {
    switch ($_GET['page']) {
        case 'messageVendeur':
            include('Controleur/Vendeur/message.php');
            break;
        case 'articleVendeur':
            include('Controleur/Vendeur/article.php');
            break;
            case 'commandeVendeur':
            include('Controleur/Vendeur/commandeVenduer.php');
            break;
            case 'pageAcceuilVendeur':
            include('Controleur/Vendeur/pageAcceuilvendeur.php');
            break;
           
    }
}

<?php
session_start();
include("Modele/connectBDD.php");


if (!isset($_GET['page'])) {
    include('Controleur/All/acceuil.php');
} else {
    switch ($_GET['page']) {
        // case 'messageVendeur':
        //     include('Controleur/Vendeur/message.php');
        //     break;
        case 'articleVendeur':
            include('Controleur/Vendeur/article.php');
            break;
            case 'commandeVendeur':
            include('Controleur/Vendeur/commandeVenduer.php');
            break;
            case 'pageAcceuilVendeur':
            include('Controleur/Vendeur/pageAcceuilvendeur.php');
            break;
            case 'connexion':
            include('Controleur/All/connexion.php');
            break;
            case 'newCompte':
            include('Controleur/All/newCompte.php');
            break;
            case 'createNewUser':
            include('Controleur/All/createNewUser.php');
            break;
            case 'createNewUser2':
            include('Controleur/All/createNewUser2.php');
            break;
            case 'connexionUtilisateur':
            include('Controleur/All/connexionUtilisateur.php');
            break;
            case 'adminTheme':
            include('Controleur/Admin/adminTheme.php');
            break;
            case 'articleVendeur':
            include('Controleur/Vendeur/article.php');
            break;
            case 'ajouterArticle':
            include('Controleur/Vendeur/ajouterArticle.php');
            break;
            case 'messageVendeur':
            include('Controleur/Vendeur/indexMessage.php');
            break;
            //
    }
    }


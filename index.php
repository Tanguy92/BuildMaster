<?php
session_start();
include("Modele/connectBDD.php");


if (!isset($_GET['page'])) {
    include('Controleur/All/acceuil.php');
} else {
    switch ($_GET['page']) {
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
            //MESSAGE
            case 'messageVendeur':
            include('Controleur/Vendeur/indexMessage.php');
            break;
            case 'conversation':
            include('Controleur/Vendeur/conversation.php');
            break;
            case 'addMessage':
            include('Controleur/Vendeur/ajouterMessage.php');
            break;
            //SIGNALER
            case 'signaler':
            include('Controleur/Vendeur/signaler.php');
            break;
            case 'signaler2':
            include('Controleur/Vendeur/enrgistrer.php');
            break;
            case 'supSign':
            include('Controleur/Vendeur/supSignale.php');
            break;
    }
    }


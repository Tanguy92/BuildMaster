<?php
session_start();
include("/BuildMaster/Modele/ConnectBDD.php");

if (!isset($_GET['page'])) {
    include 'c/accueil.php';
} else {
    switch ($_GET['page']) {
        case 'toto':
        include 'c/toto.php' ;
            break;
        case 'courgette':
            include('./fichiers/page_courgette.html');
            break;
        case 'carotte':
            include('./fichiers/page_carotte.html');
            break;
    }
}
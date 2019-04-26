<?php
  
  $reponse = $bdd->prepare("INSERT INTO `Membre` (`nom`, `prenom`, `mail`, `mdp`, `adresse`, `idTheme`, `statut`, `magasin`) 
  VALUES (:nom,:prenom,:mail,:pass,:adresse,:theme,:grade,:magasin);");
  $reponse->execute(array(
      'nom' => $_SESSION['nom'],
      'prenom' => $_SESSION["prenom"],
      'mail' => $_SESSION["mail"],
      'pass' => $_SESSION["pass"],
      'adresse' => $_SESSION["adresse"],
      'theme' => $_SESSION["theme"],
      'grade' => $_SESSION["grade"],
      'magasin' => $_SESSION["magasin"]
  ));
?>
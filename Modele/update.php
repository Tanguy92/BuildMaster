<?php

function updateArticle($s1,$s2,$s3,$s4,$s5,$s6,$s7){
    $bdd = $GLOBALS["bdd"];
    if(isset($_POST['modifier'])){
        $idProduit = $_POST['modifier'];
    }elseif (isset($_POST['modifierArticle'])) {
        $idProduit = $_POST["idProduit"];
    }

    $query =
    "UPDATE `article` SET `nom` = :set1, `prix` = :set2, `idCategorie` = :set3, photo = :set4, dateDebut = :set5, dateFin = :set6, `description`=:set7 WHERE `article`.`idProduit` = $idProduit";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array(":set1" => $s1,
                        ":set2" => $s2,
                        ":set3" => $s3,
                        ":set4" => $s4,
                        ":set5" => $s5,
                        ":set6" => $s6,
                        ":set7" => $s7));
        $check = true;
       
    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }

    return $check;
}

//ANNIA
//Actualiser mail
function updateMail($n, $personne) {
    $bdd = $GLOBALS["bdd"];
    $s = $bdd -> prepare("UPDATE `membre` SET `mail` = :nb WHERE `membre`.`idMembre` = :identifiant;");
    $s -> execute(array('nb' => $n, 'identifiant' => $personne));
}

//Mot de passe
function updateMdp($n, $personne) {
    $bdd = $GLOBALS["bdd"];
    $s = $bdd -> prepare("UPDATE `membre` SET `mdp` = :nb WHERE `membre`.`idMembre` = :identifiant;");
    $s -> execute(array('nb' => $n, 'identifiant' => $personne));
}

//Adresse
function updateAdresse($n, $personne) {
    $bdd = $GLOBALS["bdd"];
    $s = $bdd -> prepare("UPDATE `membre` SET `adresse` = :nb WHERE `membre`.`idMembre` = :identifiant;");
    $s -> execute(array('nb' => $n, 'identifiant' => $personne));
}

//Magasin
function updateMagasin($n, $personne) {
    $bdd = $GLOBALS["bdd"];
    $s = $bdd -> prepare("UPDATE `membre` SET `magasin` = :nb WHERE `membre`.`idMembre` = :identifiant;");
    $s -> execute(array('nb' => $n, 'identifiant' => $personne));
}
/*function updateDispoArticle(){
    $bdd = $GLOBALS["bdd"];
    if(isset($_POST['ajoutPanier'])){
        $idProduit = $_POST['ajoutPanier'];
    }
    $query =
    "UPDATE `article` SET `dispo` = 'non' WHERE `article`.`idProduit` = $idProduit";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array());

    $check = true;

    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }

    return $check;
}*/

/*function updateArticlePanier(){
    $bdd = $GLOBALS["bdd"];
    if(isset($_POST['supprimerPanier'])){
        $idProduit = $_POST['supprimerPanier'];
    }
    $query =
    "UPDATE `article` SET `dispo` = 'oui' WHERE `article`.`idProduit` = $idProduit";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array());

    $check = true;

    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }

    return $check;
}*/

//Fonction pour mettre la dateDebut location à jour si elle est depassée.
function updateDateDebutArticle(){
    $bdd = $GLOBALS["bdd"];
    $query =
    "UPDATE `article` SET `dateDebut` = CURRENT_DATE WHERE dateDebut < CURRENT_DATE";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array());

    $check = true;

    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }

    return $check;
}


function updateDeletePanier($s1,$s2,$s3,$s4){
    $bdd = $GLOBALS["bdd"];
    $query = "UPDATE commande SET panier = 'false',etat = 'ouverte', dateDebut = :set3, dateFin = :set4 WHERE idProduit = :set1 AND idMembre = :set2 AND panier LIKE 'true'";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array(":set1" => $s1,
                                  ":set2" => $s2,
                                  ":set3" => $s3,
                                  ":set4" => $s4
                                 ));

        $check = true;
       
    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }

    return $check;
}

function updateFermetureCommande(){
    $bdd = $GLOBALS["bdd"];
    $query =
    "UPDATE `commande` SET `etat` = 'ferme' WHERE dateFin <= CURRENT_DATE";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array());

    $check = true;

    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }

    return $check;
}

function updateDeleteCategorie($s1){
    $bdd = $GLOBALS["bdd"];
    $query =
    "UPDATE `article` SET `idCategorie` = '10' WHERE idCategorie = $s1";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array());

    $check = true;

    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }

    return $check;
}

//theme

function updateTheme($s1,$s2) {
    $bdd = $GLOBALS["bdd"];
    $s = $bdd -> prepare("UPDATE `membre` SET `idTheme` = :idTheme WHERE `membre`.`idMembre` = :identifiant;");
    $s -> execute(array('idTheme' => $s1, 'identifiant' => $s2));
}
?>
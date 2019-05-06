
<body>
    <br>
    <br>
    <form class="box" action="index.php" method ="GET">
        <input type="submit" name="page" value="Ajouter un thème" method ="GET"><br>
        <input type="submit" name="page" value="Modifier un thème" method ="GET"><br>
        <input type="submit" name="page" value="Supprimer un thème" method ="GET"><br>
    </form>
    <?php

if ( isset($_GET['page'])) {
    if ( isset($_GET['Ajouter'])) {
        include('ajouter.php');
    } elseif ( isset($_GET['Modifier'])) {
        include('modifier.php');
    } elseif ( isset($_GET['Supprimer'])) {
        include('supprimer.php');
    }
}

if ( isset($_GET['page'])) {
    if ( isset($_GET['Ajouter'])) {
        echo "Vous avez choisi d'ajouter le thème.";
    }
    if ( isset($_GET['Modifier'])) {
        echo "Vous avez choisi de modifier le thème.";
    }
    if ( isset($_GET['Supprimer'])) {
        echo "Vous avez choisi de supprimer le thème.";
    }
}
    ?>
</body>
</html>
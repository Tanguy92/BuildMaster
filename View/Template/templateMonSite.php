<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vendeur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="View/Template/cssMonSite.css">
    <script src="log.js"></script>
</head>

<body>


    <head>
        <meta name="format-detection" content="telephone=no" />
    </head>

    <header class="topnav">
        <nav>
            <img class="logo" src="/BuildMaster/View/Image/Logo.png">
            <ul>
                <li><a href="index.php?page=messageVendeur">Mes Messages</a></li>
                <li><a href="index.php?page=articleVendeur">Mes Articles</a></li>
                <li><a href="#">Mes Commandes</a></li>
                <li><a href="index.php?page=monSite">Mon site</a></li>
                <li><a href="index.php?page=boiteOutil">Boite a Outil</a></li>
                <li><a href="#">Déconnexion</a></li>
    </header>

    '<style>
</style>'
    <?php affiche($chemin); ?>
    <main>
        <section class="kvsection">
            <div class="kv" id="blah">

                <p class="introcopy">Nom du magasin:</p>
                <a class="abutton" href="#">Onze diensten</a>
            </div>
            <div class="kvsubbox">
                <div class="kvsub-left">
                    <h2>Changer de Photo de Couverture</h2>
                    <form action="index.php?page=monSite" method="POST" enctype="multipart/form-data">
                        <p><input type="file" id="pic" name="photo"></h2><br><button type="submit">Changer</button>
                    </form>
                </div>
                <div class="kvsub-right">
                    <h2>Chnager de theme</h2>
                    <p>1 2 3 4 5 6</p>
                </div>
            </div>
        </section>

        <script>

function readURL(input) {
    /* Là on regarde si il y a un fichier dans un input type file */
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            /* On récupère la preview une fois que c'est préupload mamène */
                document.getElementById('blah').style.backgroundImage = 'url("'+e.target.result+'")';
        };
        /* Le petit outil qui permet de lire l'image sans reload */
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
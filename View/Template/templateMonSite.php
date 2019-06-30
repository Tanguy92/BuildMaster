<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vendeur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="View/Template/csstoto.css">
    <?php 
    
    $reponse = idTheme($mail);
    
 while ($donnees = $reponse->fetch()) {  
    $couleur = $donnees["couleur"];
     
  }
    
    include("View/Vendeur/theme.php");?>

    <script src="log.js"></script>
</head>


<body>

    <head>
        <meta name="format-detection" content="telephone=no" />
    </head>

    <header class="topnav">
        <nav><a href="index.php?page=boiteOutilV">
            <img class="logo" src="/BuildMaster/View/Image/Logo.png">
            <ul>
                <li><a href="index.php?page=messageVendeur">Mes messages</a></li>
                <li><a href="index.php?page=articleVendeur">Mes articles</a></li>
                <li><a href="index.php?page=monSite">Mon site</a></li>
                <li><a href="index.php?page=change">Mes infos</a></li>
                <li><a href="index.php?page=deconnexion">Déconnexion</a></li>
    </header>

    

    <?php affiche($chemin); ?>
    <main>
        <section class="kvsection">
            <div class="kv" id="blah">

                <p class="introcopy"></p>
                <!--<a class="abutton" href="#">Onze diensten</a>-->
            </div>
            <div class="kvsubbox">
                <div class="kvsub-left">
                    <h2>Changer de photo de couverture</h2>
                    <form action="index.php?page=monSite" method="POST" enctype="multipart/form-data">
                        <p><input type="file" id="pic" name="photo"></h2><br><button type="submit">Changer</button>
                    </form>
                </div>
                <div class="kvsub-right">

                    <h2>Changer de thème</h2>
                    <p><form action="index.php?page=monSite" method="POST"> <?php  
                    $reponse = RadioTheme();
                    
                    while ($donnees = $reponse->fetch()) {
                        include("View/Vendeur/functionRadioTheme.php");
                    }
                     ?><br><button>Modifier</button>
                     </form></p>


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
  <section class="cardsection">



<div class="card-right">
    <div class="card-copy">
        <h1>Modifier Mon Logo</h1></a>
        <p>Cette fonctionalité vous permet de modifier votre logo.</p><br>


        <form action="index.php?page=monSite" method="POST" enctype="multipart/form-data">
                        <p><input type="file" id="logo" name="logo"></h2><br><button type="submit">Changer</button>
                    </form>
       
    </div>
    
    <?php 
    $reponse=selectIdMembre();
    while ($donnees = $reponse->fetch()) {
        $logo = $donnees["logo"];
    }

    


    
    include("View/Vendeur/functionLogo.php") 
    ?>
    
      
    </div>
</div>
</section>
</body>
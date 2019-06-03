<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="View/Template/css.css">
    <script src="log.js"></script>
</head>

<body>


    <head>
        <meta name="format-detection" content="telephone=no"/>
    </head>

    <header class="topnav">
        <nav><a href="index.php?page=boiteOutilA">
            <img class="logo" src="/BuildMaster/View/Image/Logo.png">
            <ul>
                <li><a href="index.php?page=messageVendeur">Mes Messages</a></li>
                <li><a href="index.php?page=adminTheme">Modifier les thèmes</a></li>
                <li><a href="index.php?page=affUser">Afficher les comptes</a></li>
                <li><a href="index.php?">Déconnexion</a></li>
              
        </nav>
    </header>
    <main>
        <section class="kvsection">
            <div class="kv">
                <h1>Bonjour <?php echo  $_SESSION['prenom']; ?> </h1>
                <p class="introcopy">Boite a outil : Admin</p>
            </div>
            <div class="kvsubbox">
                <div class="kvsub-left">
                    <h2>Bienvenue sur BuildMaster</h2>
                    <p>Le site de location nouvelle génération</h2>
                </div>
                <div class="kvsub-right">
                    <h2>Loueur ou Vendeur</h2>
                    <p>C'est ici que vous pourrez construire votre futur</p>
                </div>
            </div>
        </section>


        <section class="cardsection">


            <div class="card-right">
                <div class="card-copy">
                    <h1>Modifier un thème</h1></a>
                    <p>Changer la couleur ainisi que son nom c'est possible ici</p>
                    <a class="abutton" href="index.php?page=adminTheme">Goo</a>
                </div>
                <div class="card-img" style="background-image:url(https://sdwebdesign.nl/wp-content/uploads/2016/04/prestashop-bord-1.jpg)">
                  
                </div>
            </div>

            
        </section>


        <section class="cardsection">
            <div class="card-left">
                <div class="card-copy">
                    <a href="#">
                        <h1>Mes Messages</h1>
                    </a>
                    <p>Contactez les vendeurs ou loueurs de votre choix</p>
                    <a class="abutton" href="index.php?page=messageVendeur">Goo</a>
                </div>

                <div class="card-img" style="background-image:url(https://sdwebdesign.nl/wp-content/uploads/2016/04/waterlaptop-1.jpg)">
                    <div class="card-img error-img">

                    </div>
                </div>
            </div>

            <div class="card-right">
                <div class="card-copy">
                        <h1>Afficher les utilisateurs</h1>
                    </a>
                    <p>Liste des utilisateurs étant inscrits sur BuildMaster</p>
                    <a class="abutton" href="index.php?page=affUser">Afficher</a>
                </div>

                <div class="card-img" style="background-image:url(https://sdwebdesign.nl/wp-content/uploads/2016/04/waterlaptop-1.jpg)">
                    <div class="card-img error-img">

                    </div>
                </div>
            </div>

           
        </section>


        <!-- <section class="portofoliosection" >
            <h1>Recente projecten</h1>
            <div class="projectbox">
                <a href="#"><img class="thumbnail" src="https://sdwebdesign.nl/wp-content/uploads/2017/02/project-img-1.jpg"></a>
                <a href="#"><img class="thumbnail" src="https://sdwebdesign.nl/wp-content/uploads/2017/02/project-img-2.jpg"></a>
                <a href="#"><img class="thumbnail" src="https://sdwebdesign.nl/wp-content/uploads/2017/02/project-img-3-1.jpg"></a>
            </div>
            <a class="abutton-dark" href="#">Portofolio</a>
        </section> -->
<!-- 
        <section class="linksection">
            <a href="#" class="biglink biglink-dark">
                <div>
                    <h1>Vacatures</h1>
                    <span class="abutton">→</span>
                </div>
            </a>
            <a href="#" class="biglink">
                <div>
                    <h1>Blogs</h1>
                    <span class="abutton-dark">→</span>
                </div>
            </a>

        </section>
    </main>
 -->

    <footer>
        <section class="quotesection">
            <h1>BuildMaster</h1>
            <blockquote>
                <p>Il suffit d'avoir loué pour ne plus savoir y résister</p>
            </blockquote>
            <blockquote>
                <p>Vendre, parce que je le vaux bien</p>
            </blockquote>
        </section>

        <section class="infosection">
            <ul class="contact-info">
                <li>
                    <a>admin@bm.fr
                    </a>
                </li>
                <li>
                    <a>06 42 57 41 30</a>
                </li>
                <li>
                    Contactez-nous en cas de besoin</li>
        </section>
        <div class="copyrightsection">
            <p>&copy;BuildMaster</p>
            </section>
    </footer>

</body>

</html>
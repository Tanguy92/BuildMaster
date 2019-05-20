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
        <meta name="format-detection" content="telephone=no" />
    </head>

    <header class="topnav">
        <nav>
            <img class="logo" src="/BuildMaster/View/Image/Logo.png">
            <ul>
                <li><a href="index.php?page=messageVendeur">Mes Messages</a></li>
                <li><a href="index.php?page=articleVendeur">Mes Articles</a></li>
                <li><a href="#">Mes Commandes</a></li>
                <li><a href="#">Mon site</a></li>
                <li><a href="#">Déconnexion</a></li>
              
        </nav>
    </header>
    <main>
        <section class="kvsection">
            <div class="kv">
                <h1>Bonjour : <?php echo  $_SESSION['prenom']; ?> </h1>
                <p class="introcopy">Boite a outil : ADMIN</p>
                <a class="abutton" href="#">Bouton</a>
            </div>
            <div class="kvsubbox">
                <div class="kvsub-left">
                    <h2>Title</h2>
                    <p>Texte à rajouter.</h2>
                </div>
                <div class="kvsub-right">
                    <h2>Title</h2>
                    <p>Texte à rajouter.</p>
                </div>
            </div>
        </section>


        <section class="cardsection">
            <div class="card-left">
                <div class="card-copy">
                    <a href="index.php?page=articleVendeur">
                        <h1>Gérer les utilisateurs</h1>
                    </a>
                    <p>Cette page vous permet de gérer vos articles .</p>
                    <a class="abutton" href="index.php?page=articleVendeur">Goo</a>
                </div>

                <div class="card-img" style="background-image:url(https://sdwebdesign.nl/wp-content/uploads/2016/04/waterlaptop-1.jpg)">
                    <div class="card-img error-img">

                    </div>
                </div>
            </div>


            <div class="card-right">
                <div class="card-copy">
                    <h1>Modifier un thème</h1></a>
                    <p> Vous pouvez aller manger des pancakes</p>
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
                    <p>Suivez ici toutes vos commandes </p>
                    <a class="abutton" href="#">Goo</a>
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
            <h1>Title</h1>
            <blockquote><span class="bigquote">"</span>
                <p>Texte à rajouter.</p>
                <footer>
                    <cite>Texte à rajouter.</cite>
                </footer>
            </blockquote>

            <blockquote><span class="bigquote">"</span>
                <p>Texte à rajouter.</p>
                <footer>
                    <cite>Texte à rajouter.</cite>
                </footer>
            </blockquote>
        </section>

        <section class="infosection">
            <ul class="contact-info">
                <li>
                    <a>e-mail
                    </a>
                </li>
                <li>
                    <a>Numéro</a>
                </li>
                <li>
                    Texte à rajouter.</li>
        </section>
        <div class="copyrightsection">
            <p>&copy;Texte à rajouter.</p>
            </section>
    </footer>

</body>

</html>
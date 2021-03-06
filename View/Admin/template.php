<?php session_start()
?>
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
                <a class="abutton" href="#">Onze diensten</a>
            </div>
            <div class="kvsubbox">
                <div class="kvsub-left">
                    <h2>Missie</h2>
                    <p>De beleving tussen mensen en websites verbeteren.</h2>
                </div>
                <div class="kvsub-right">
                    <h2>Kenmerken</h2>
                    <p>Snelle communicatie, nuchterheid en kennis van zaken.</p>
                </div>
            </div>
        </section>


        <section class="cardsection">
            <div class="card-left">
                <div class="card-copy">
                    <a href="index.php?page=articleVendeur">
                        <h1>Gerer les utilisateurs</h1>
                    </a>
                    <p>Cette page vous permet de gere vos article .</p>
                    <a class="abutton" href="index.php?page=articleVendeur">Goo</a>
                </div>

                <div class="card-img" style="background-image:url(https://sdwebdesign.nl/wp-content/uploads/2016/04/waterlaptop-1.jpg)">
                    <div class="card-img error-img">

                    </div>
                </div>
            </div>


            <div class="card-right">
                <div class="card-copy">
                    <h1>Modifier un theme</h1></a>
                    <p> Vous pouvez aller manger des pankaes</p>
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
                    <p>Suivez ici tout vos commande </p>
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
            <h1>Klanten over ons</h1>
            <blockquote><span class="bigquote">"</span>
                <p>SD Webdesign luistert naar je wensen en zoekt naar de beste oplossing. Onze webshop is helemaal naar wens! We zijn zeer tevreden.</p>
                <footer>
                    <cite>- Tescity.be</cite>
                </footer>
            </blockquote>

            <blockquote><span class="bigquote">"</span>
                <p>De nieuwe site is echt een pareltje in designinspiratie voor de zakelijke markt. De site is ontworpen door Yellow Agency en gebouwd door SD Webdesign.</p>
                <footer>
                    <cite>- Roes.nu</cite>
                </footer>
            </blockquote>
        </section>

        <section class="infosection">
            <ul class="contact-info">
                <li>
                    <a>info@sdwebdesign.nl
                    </a>
                </li>
                <li>
                    <a>0546 - 23 20 04</a>
                </li>
                <li>
                    Hofkampstraat 49 7607NC Almelo</li>
        </section>
        <div class="copyrightsection">
            <p>&copy;SD Webdesign - Algemene voorwaarden</p>
            </section>
    </footer>

</body>

</html>
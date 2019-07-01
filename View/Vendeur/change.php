	    <link rel="stylesheet" type="text/css" href="View/Css/modif.css"/>
        <title>Accueil</title>
        <script src="View/All/verif.js"></script>

	<body><center>
    <div class="content">
        <div class="header"><h1>Changez les données personnelles que vous souhaitez</h1></div>
            <div class="content">
                <form class="login-form" action="index.php?page=change2" method="POST" onsubmit="return verifForm(this)">
                    <p>
                    <div><h3>Mot de passe actuel</h3></div>
                        <input class="input password" type="password" name="motOld" value=""></br>
                    </p>
                    <p>
                        <h3>Votre mail actuel est : <?php echo $s['mail']; ?></h3>
                        <div class="user-icon"></div>
                        <label>Choisisez votre nouveau mail</label></br>
                        <input class="input username" type="text" name="mail" placeholder="example@gmail.com" onblur="verifMail(this)"></br>        
                    </p>
                    <p></br></br>
                        <label>Choisisez votre nouveau mot de passe</label></br>
                        <input id="zoneText2" type="password" name="mot" value=""></br>
                        <div class="pass-icon"></div>	
                        <label>Confirmez le mot de passe</label></br>
                        <input class="input password" type="text" name="password" value="">
                    </p>
                    <p>
                        <h3>Votre adresse actuel est : <?php echo $s['adresse']; ?></h3>
                        <label>Choisisez votre nouvelle adresse</label></br>
                        <input class="input username"  type="text" name="adresse" value="">
                    </p>

                    <?php
                        if ($s['statut'] == 'v') {
                    ?>

                    <p>
                        <h3 class="input username">Votre magasin s'appelle : <?php echo $s['magasin']; ?></h3>
                        <label>Nouveau nom</label></br>
                        <input class="input username" type="text" name="magasin" value="">
                    </p>
                    <?php
                        } 
                    ?>

                    <p>
                        <input type="hidden" name="page" value="change2">
                        
                        <div class="footer">
                            <input id="bouton" type="submit" value="Soumettre">
                        </div>
                    </p>
                </form>
            </div>
    </div>
    </center></body>
</html>
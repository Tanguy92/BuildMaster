
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="/BuildMaster/View/Css/connexion.css">
  <script src="main.js"></script>
</head>

<body>
  <div class="login-card">

    <H1>Etape 1</H1>
    <h1>Creation de compte</h1><br>
    <h2>Erreur : Email non valide </h2>

    <form action="index.php?page=createNewUser" method="POST">



      <p>
      Votre Nom  <input  type="text" name="nom" required placeholder="Nom">
      Votre Prénom  <input  type="text" name="prenom" required placeholder="Prénom">
       <!-- Votre Pseudo  <input  type="text" name="pseudo" placeholder="Pseudo"> -->
       Votre Email  <input type="text" name="mail" required placeholder="Email">
       Votre statut <select name="grade">
          <option value="v">Vendeur</option>
          <option value="c" selected>Client</option>

         Votre mot de passe <input type="password" name="pass" required placeholder="Mot de passe">

          <input type="submit" name="login" class="login login-submit" value="Etape 2">

    </form>

  </div>
  </div>

</body>

</html>

 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Page Title</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" media="screen" href="/BuildMaster/View/Css/connexion.css">

 </head>

 <body>
     <div class="login-card">

         <h1>Connexion</h1><br>
         <h2>Email ou mot de passe incorect</h2>

         <form method="POST" action="index.php?page=connexionUtilisateur">
             
            Email <input type="text" name="mail" required placeholder="Email">
            Mot de passe <input type="password" required name="pass" placeholder="Password">
             <input type="submit" name="login" class="login login-submit" value="Connexion">
         </form>



         <div class="login-help">
             <a href="index.php?page=newCompte">Vous n'avez pas de compte ?</a>
         </div>
     </div>
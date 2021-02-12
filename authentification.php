<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" href="styles/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/authentification.css">
</head>
<body>
  

    <div class="container-fluid">
        <div class="container">
            <div class="container mt-5">  
                 <form class="m-auto " id="contact" action="traitementauthenti.php" method="post">
                    <h3>Développeurs</h3>
                    <h4>Authentifiez vous</h4>
                    <div class="m-auto">
                        <div class="text-center">
                            <fieldset class="text-center" >
                                <input name="email" placeholder="Email" type="email"  required autofocus>
                            </fieldset>
                        </div>
                        <fieldset>
                            <input name="password"  placeholder="Mot de passe" type="password"  required>
                        </fieldset>
                        <fieldset>
                            <button name="submit" type="submit" id="submit" data-submit="...Sending">Authentification</button>
                        </fieldset>
                    </div>
                    <p class="copyright"> <a href="connexion.php" style="color: #10F86C; text-decoration: none;"  title="Colorlib">Connexion</a></p>
                 </form>
              </div>
        </div>
  
</body>
</html>
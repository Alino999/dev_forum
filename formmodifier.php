<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link rel="stylesheet" href="styles/inscription.css">
    <link rel="stylesheet" href="styles/bootstrap-4.5.3-dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container-fluid">
        <div class="container">
            <header class="">
                <div class="row ">
                    <div class="col-3 mt-3">
                        <img src="fonts/lacsoft.png" alt="">
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <div class="container-fluid">
                         
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="navbar-brand" href="index.php">Accueil</a>
                                </li>
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="afficher.php">Forum</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="deconnexion.php">Deconnexion</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
            </header>

        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="container">  




            <?php 
            require_once 'connexion.php';
           
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                         <div class="alert alert-success" role="alert">
                     <h4 class="alert-heading text-center">FELICITATION</h4>
                  <p class="text-center">Votre ajoue a été effectuée avec succès.</p>
                              <hr>
                     <p class="text-center"><a href="accueil.html">Acceder à votre compte</a></p>
                        </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <h4  class="text-center">Erreur !!! mot de passe incorrect</h4>
                                <p  class="text-center">Merci de réessayer</p>
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <h4 class="text-center">Erreur !!! Email non valide</Em></h4>
                                <p class="text-center">Merci de réessayer</p>
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                             <div class="alert alert-danger" role="alert">
                                <h4 class="text-center">Erreur !!! Email trop long</h4>
                                <p class="text-center">Merci de réessayer</p>
                            </div>
                        <?php 
                        break;

                        case 'username_length':
                        ?>
                             <div class="alert alert-danger" role="alert">
                                <h4 class="text-center">Erreur !!! Nom d'utlisateur trop long</h4>
                                <p>Merci de réessayer</p>
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <h4 class="text-center">Erreur Compte déjà existant</h4>
                              
                            </div>
                        <?php 

                    } 
                }
                ?>


<?php 
             if(isset( $_GET['ID']))
             {
    
                    $ID=$_GET['ID'];
                    
                    $sql="SELECT * FROM inscription WHERE ID='$ID'";
                    $req=$db->query($sql) or die ("Erreur SQL");
                    $data=$req->fetch();
                }
      ?>

                <form class="m-auto " id="contact" action="modifieCmpte.php" method="post">
                  <h3>Administrateur</h3>
                  <h4>Modifier</h4>
                  <div class="m-auto">
                      <div class="text-center">
                        <fieldset class="text-center" >
                            <input name="username" placeholder="Username" type="text"  value="<?= $data['username'] ?>" required autofocus>
                          </fieldset>
                         
                      </div>
                      <fieldset>
                        <input name="email" placeholder=" Email " type="email" value="<?= $data['username'] ?>" required>
                      </fieldset>
                      <fieldset>
                        <input name="password"  placeholder="Mot de passe" type="password" value="<?= $data['username'] ?>" required>
                      </fieldset>
                      <fieldset class="text-center" >
                            <input name="ID" placeholder="ID" type="hidden"  value="<?= $data['ID'] ?>" required autofocus>
                          </fieldset>
                      <fieldset>
                        <button name="submit" type="submit" id="submit" data-submit="...Sending">Enregistrer</button>
                      </fieldset>
                  </div>
                </form>
                  </div>
              </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="container">
          <div class="container">
            <footer>
              <div class="row">
                <div class="col m">
                  <img src="fonts/lacsoft.png" alt="">
                </div>
                <div class="col m-auto">
                  <p>La plateforme du <span style="font-weight: bold; color: #10F86C;">groupe Lacsoft</span> pour faciliter la tâche aux <span style="font-weight: bold; color: #10F86C;" >développeurs</span> </p>
                </div>
              </div>
            </footer>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
</body>
</html>
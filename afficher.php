
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="styles/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/affichage.css">
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
                                <a   href="deconnexion.php"><button type="button" class="btn btn-primary">Deconnexion</button></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
            </header>
        </div>
    </div>

    <div class="container ima">
      <div class="text-center">
      <a href="forum.php"><button type="button" class="outline-none btn btn-success">Question</button></a>
      </div>


<?php
require_once 'affichage.php';
    while($data = $recuperation->fetch()) {
        ?>
                <div class="row">
                <div class="ml-3 d-flex">
                    <div style="margin-left: 980px;" class="col-2">
                    <a href="reponse.php"><button type="submit" class="btn btn-primary">Repondre</button></a>
                   </div>
                    
                </div>
            </div>
        <div class="container ">
            <div class="shadow p-3 mb-5 bg-light rounded">
                <div class="row d-flex">
                    <div class="col-3 d-flex">
                        <img src="fonts/User_48px.png" alt="">
                        <div class="mt-3 color-succes"><?= $data['username']; ?></div>
                    </div>
                    <div style="margin-left: 440px; color:#10F86C;" class="col-4"><?= $data['date_a']; ?></div>
                </div>
                 <div class="col-3">
                    <div><?= $data['categorie']; ?></div>
                </div>
                <div class="col-3">
                    <div><?= $data['sous_categorie']; ?></div>
                </div>
                <div class="col-3">
                    <div><?= $data['question']; ?></div>
                </div>
                </div>

                <?php   //echo "<td>".$data."</td> ?>

        </div>

        
        

        <?php
    }                  
        ?>  
        
        
<?php
require_once 'afficher_reponse.php';
    while($data = $recuperation->fetch()) {
        ?>

        <div class="container ">
            <div class="shadow p-3 mb-5 bg-light rounded">
                <div class="row d-flex">
                    <div class="col-3 d-flex">
                        <img src="fonts/User_48px.png" alt="">
                        <div class="mt-3 color-succes"><?= $data['username']; ?></div>
                    </div>
                    <div style="margin-left: 440px; color:#10F86C;" class="col-4"><?= $data['date_a']; ?></div>
                </div>
                 <div class="col-3">
                    <div><?= $data['reponses']; ?></div>
                </div>
               
                </div>

                <?php   //echo "<td>".$data."</td> ?>

        </div>

        
        

        <?php
    }                  
        ?>
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


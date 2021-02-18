<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrateur</title>
    <link rel="stylesheet" href="styles/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/Admin.css">
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
                                <a class="nav-link active" href="deconnexion.php">Deonnexion</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
            </header>
            <div class="container con">
                <div class="image text-center" >
                    <!-- <img src="images/Admin.png" alt="">-->
                    <a href="tableau_bordadmin.php"><button type="submit" class="btn btn-primary ajout">Ajouter</button></a> <br> 
                    <a href="tableau_bordadmin.php"><button type="submit" class="btn btn-success ajout">Modifier</button> <br></a> 
                    <a href="tableau_bordadmin.php"><button type="submit" class="btn btn-danger ajout">Supprimer</button></a>
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
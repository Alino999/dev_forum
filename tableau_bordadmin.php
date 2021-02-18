<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/tableau.css">
    <link rel="stylesheet" href="styles/bootstrap-4.5.3-dist/css/bootstrap.min.css">  
    <link rel="stylesheet" href="styles/bootstrap-4.5.3-dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="">
    <title>Document</title>
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
    <div class="container">
        <div class="row">
           <div class="m-auto">
            <div class="col-6">

            <?php
            require_once 'connexion.php';
              ?> 
               
                <table class="tableau-style center">

                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Ajouter</th>
                            <th>Supprimer</th>
                            <th>Modifier</th>
                        </tr>
                    </thead> 
                    <tbody>
                    <?php

       $result=0;
       $sql="SELECT * FROM inscription";
       $req=$db->query($sql) or die ("Erreur SQL");
       while($data=$req->fetch())
       {
        
             echo"<tr>";
             echo"<td>".$data['username']."</td>";
             echo"<td>".$data['email']."</td>";
             echo"<td><a class='btn btn-success' href=' formajouter.php' >ajouter</a>";
             echo"<td><a class='btn btn-danger' onclick='return confirm(\"voulez vous supprimer ce developpeur\")' href='supprimerCmpte.php?ID=".$data[0]."';>supprimer</a>";
             echo"<td><a class='btn btn-primary' href=' formmodifier.php?ID=".$data[0]."'; >modifier</a>";
             echo"<tr>";
        
            
             /*<td>
             <form action="ajouterCmpte.php" method="post">
            
             <button type="submit" name="submit"  <span class="btn btn-success"/> <span class="glyphicon glyphicon-plus"></span> </button>
             </form>   
             </td> 
             
             
             <td> 
             <form action="supprimerCmpte.php" method="post" >
            
              <button type="submit" name="submit" class="btn btn-danger" onclick="return confirm( \'Etre vous sûr de vouloir supprimer ce document ?\')" />  <span class="glyphicon glyphicon-trash"></span>  </button>
             </form>
             </td> 



       <?php
        require_once 'affichage.php'; ?>

<table class="tableau-style center">

<thead>
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Ajouter</th>
        <th>Supprimer</th>
        <th>Modifier</th>
    </tr>
</thead> 
<tbody>
        <?php
        while($data = $recuperation->fetch()) {
            echo"<tr>";
            echo"<td>".$data['username']."</td>";
            echo"<td>".$data['email']."</td>";
            echo"<td><a class='btn btn-success' href=' formajouter.php' >repondre</a>";
            echo"<td><a class='btn btn-danger' onclick='return confirm(\"voulez vous supprimer ce developpeur\")' href='supprimerCmpte.php?ID=".$data[0]."';>supprimer</a>";
            echo"<td><a class='btn btn-primary' href=' formmodifier.php?ID=".$data[0]."'; >modifier</a>";
            echo"<tr>";
            ?>





             <td> 
             <form action="modifieCmpte.php" method="post" >
            
              <button type="submit" name="submit" class="btn btn-primary" />  <span class="glyphicon glyphicon-edit"></span>   </button>
             </form>

             </td>
             </tr> */
                     
        
    }
           
       ?> 
        </div> 
       </div>
       </div>

      
          
       <div class="container">
        <div class="row">
           <div class="m-auto">
            <div class="col-6">

           
               
                <table class="tableau-style center">

                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Catégorie</th>
                            <th>Sous_catégorie</th>
                            <th>Sujet</th>
                            <th>question</th>
                            <th>Repondre</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead> 
                    <tbody>
                    <?php

       $result=0;
       $sql="SELECT * FROM poster";
       $req=$db->query($sql) or die ("Erreur SQL");
       while($data=$req->fetch())
       {
        
             echo"<tr>";
             echo"<td>".$data['username']."</td>";
             echo"<td>".$data['categorie']."</td>";
             echo"<td>".$data['sous_categorie']."</td>";
             echo"<td>".$data['sujet']."</td>";
             echo"<td>".$data['question']."</td>";
             echo"<td><a class='btn btn-primary' href=' reponse.php' >Repondre</a>";
             echo"<td><a class='btn btn-danger' onclick='return confirm(\"voulez vous supprimer ce developpeur\")' href='supprimerCmpte.php?ID=".$data[0]."';>Supprimer</a>";
             echo"<tr>";}
         
             ?> 
        </div> 
       </div>
       </div>  
         

       
             
               
                    <!--tbody>
                        <tr>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                        </tr>
                        
                        <tr>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                        </tr>
                        <tr>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                        </tr>
                        <tr>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                        </tr>
                        <tr>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                            <td>Contenu</td>
                        </tr>
                        
                    </tbody>
            
                </table> -->
               
           



    </body>
          </html> 
<?php
    /* session_start ();
    $titre = "Voir un forum";
    // recuperation de la valeur
    $afficher = (int) $_GET ['afficher'];

    // compter le nombre et n'afficher que 25
    $query = $db -> prepare ('SELECT * FROM poste_reponse WHERE id = :id');
    $query -> bindValue(':id', $afficher, PDO::PARAM_INT);
    $query -> execute();
    $data = $query-> fetch();

    $totalDesMessages = $data ['poster'] + 1;
    $nombreDeMessagesParPage = 25;
    $nombreDePages = ceil($totalDesMessages / $nombreDeMessagesParPage);


      <div class="" >
       <h3>
           <?php echo htmlspecialchars($data['username']);?>
           <em>le <?php echo $data['question'];?></em>
       </h3>
       p
       <p>
           <?php 
           //afficher le contenu
           echo nl2br(htmlspecialchars($data['reponse']));
           ?> <br/>
           <em><a href="forum.php?reponse=<?php echo $data['id']?>">commentaire</a></em>
       </p>
    </div>



             donnees.push({
                username: '<?= $data['username']; ?>',
                categorie: '<?= $data['categorie']; ?>',
                sous_categorie: '<?= $data['sous_categorie']; ?>',
                sujet: '<?= $data['sujet']; ?>',
                question: '<?= $data['question']; ?>',
            
            });



    echo '<p><i> vous êtes ici </i> : <a href="inscription.php"> index du forum </a>
            <a href="reponse.php?afficher='.$afficher'">' .stripslashes(htmlspecialchars($data['poste_reponse']))'</a>';

            //nombre de page
             $page = (isset($_GET['page']))?intval($_GET['page']):1;
            
             //on affiche les pages 
             echo '<p>Page : ';
             for ($i = 1 ; $i <= $nombreDePages ; $++){
                 if ($i == $page) {
                     echo $i;
                 }else{
                     echo '<a href="forum.php?afficher='.$afficher'&amp;page='.$i'">'.$i'</a>';
                 }
             }
             echo '</p>';

             $recuperation -> closecursor();






             

             $premierMessageAafficher = ($page - 1) * $nombreDeMessagesParPage;

             //titre de l'affichage
              echo '<h1>'.stripslash(htmlspecialchars($data['forum'])).'</h1><br/><br/>';

              //le bouton pour poster
              echo '<a href="./reponse.php?action=nouveauposte&amp;afficher='.$afficher.'">
              <img src="" title=""/></a>';
              $query ->closecursor();

              // prendre toutes les annonces du forum
              $query=$db->prepare('SELECT * WHERE id = ')

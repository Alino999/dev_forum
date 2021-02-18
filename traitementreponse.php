<?php

    require_once 'connexion.php';

    if(isset($_POST['username']) && isset($_POST['reponses']))
    {
    
        $username = htmlspecialchars($_POST['username']);
        $reponses = htmlspecialchars($_POST['reponses']);
      

        
        $insert = $db->prepare('INSERT INTO poste_reponse ( username, reponses) VALUES( :username, :reponses)');
        $insert->execute(array(
            ':username' => $username,
            ':reponses' => $reponses,
        ));
    }
    ?>

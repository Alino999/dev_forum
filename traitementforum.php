<?php

    require_once 'connexion.php';

    if(isset($_POST['username']) && isset($_POST['categorie']) && isset($_POST['sous_categorie']) && isset($_POST['sujet']) && isset($_POST['question']))
    {
        $username = htmlspecialchars($_POST['username']);
        $categorie = htmlspecialchars($_POST['categorie']);
        $sous_categorie = htmlspecialchars($_POST['sous_categorie']);
        $sujet = htmlspecialchars($_POST['sujet']);
        $question = htmlspecialchars($_POST['question']);
        $id = '';

      

        $check = $db->prepare('SELECT username, categorie, sous_categorie, sujet, question FROM poster WHERE categorie = ?');
        $check->execute(array($categorie));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0){ 
            if(strlen($username) <= 30){
                if(strlen($categorie) <= 50){
                    if(strlen($sous_categorie) <= 60){
                        if(strlen($sujet) <= 70){
                            
                             if(strlen($question) <= 80){

                            $insert = $db->prepare('INSERT INTO poster (ID, username, categorie, sous_categorie, sujet, question) VALUES(:id, :username, :categorie, :sous_categorie, :sujet, :question)');
                            $insert->execute(array(
                                ':id'=>$id,
                                ':username' => $username,
                                ':categorie' => $categorie,
                                ':sous_categorie' => $sous_categorie,
                                ':sujet' => $sujet,
                                ':question' => $question
                              
                            ));

                            header('Location:afficher.php?reg_err=success');
                            die();
                            }else{ header('Location: traitementforum.php?reg_err=question_length'); die();}
                        }else{ header('Location: traitementforum.php?reg_err=sujet_length'); die();}
                    }else{ header('Location: traitemenforum.php?reg_err=sous_categorie_length'); die();}
                }else{ header('Location: traitementforum.php?reg_err=categorie_length'); die();}
            }else{ header('Location: traitementforum.php?reg_err=username_length'); die();}
        }else{ header('Location: traitementforum.php?reg_err=already'); die();}
    }
    
    ?>
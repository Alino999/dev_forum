<?php

require_once 'connexion.php';   //connexion à la base de données
if(isset($_POST ['email']) && isset ($_POST['password'])) // vérification des donnés (si username et mo de passe sont réglés)
{
// déclaration des variables et sécurisation des données
$username = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
//Prépare une requête à l'exécution et retourne 
$check = $db -> prepare('SELECT email, password FROM Inscription WHERE egimail= ?');
$check -> execute(array(email));
$data = $check -> fetch();
$row = $check -> rowCount();

if($row == 1)
{
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        
        if(password_verify($password, $data['password']))
        {
            $_SESSION['email'] = $data['email'];
            header('Location: inscription.php');
            die();
        }else{ header('Location: index.php?login_err=password'); die(); }
    }else{ header('Location: index.php?login_err=email'); die(); }
}else{ header('Location: index.php?login_err=already'); die(); }

}



?>
<?php
try {
    //connexion à la base de données
    $user = "root";
    $pass = "";
    $db = new PDO ("mysql:host=localhost; dbname=plateforme_forum", $user, $pass);
  } catch (Exception $th) {
    //afficher les erreures cache le mot de passe
    die("ERREUR: ".$th -> getMessage());
}
?>
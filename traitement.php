<?php
require_once 'connexion.php';

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];


$preparation = $db->prepare("INSERT INTO Inscription (ID, username, email, password) VALUES(?, ?, ?, ?)");
$preparation->execute(array("", $username, $email, $password));

?>
<?php
require_once "connexion.php";
//if (isset($_GET['categorie']) && !empty($_GET['cate']))


$recuperation = $db->query("SELECT * FROM poster ORDER BY date_a DESC");
if (!$recuperation) {
    echo "pas de recuperation";
}else {
    $nbr = $recuperation->rowCount();
}

//echo "Aujourd'hui est " . date("l/Y/m/d") . "<br>";
?>

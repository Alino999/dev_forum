<?php
           require_once 'connexion.php';
           echo'vous avez acces a la base de données';
            if(isset( $_GET['ID']))
            {
                $ID=$_GET['ID'];
$sql="DELETE  FROM inscription WHERE ID='$ID'";
    $reqq=$db->query($sql) or die ("Erreur SQL");
    if($reqq)
    {
        echo'supprimer avec succes';
    }
  header("Location:tableau_bordadmin.php");
//}

            }
           
          //  $sql="SELECT FROM inscription WHERE ID='".$_POST['ID']."'";
           // $reqq=$db->query($sql) or die ("Erreur SQL");
          //header("Location:tableau_bordadmin.php");
         //  if(isset($_POST['submit'])){

//$sql="DELETE FROM inscription WHERE ID='".$_POST['ID']."'";
    //$reqq=$db->query($sql) or die ("Erreur SQL");
  //header("Location:tableau_bordadmin.php");
//}
   
?>

<?php
           require_once 'connexion.php';
           echo'vous avez acces a la base de données';
            if(isset( $_GET['ID']))
            {
                $ID=$_GET['ID'];
$sql="DELETE  FROM poster WHERE ID='$ID'";
    $reqq=$db->query($sql) or die ("Erreur SQL");
    if($reqq)
    {
        echo'supprimer avec succes';
    }
  header("Location:tableau_bordadmin.php");}

  ?>
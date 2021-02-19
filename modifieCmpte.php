
<?php
require_once 'connexion.php';
$userme = $_POST['username'];
$mail = $_POST['email'];
$pass = $_POST['password'];
$ID = $_POST['ID'];

if(isset($_POST['submit']))
{

    $sql=$db->prepare("UPDATE inscription SET  username=?, email=?, password=? WHERE ID=$ID");
    $data=array($userme, $mail, $pass);
    $sql-> execute($data);
    if($sql){
      
        header("location:tableau_bordadmin.php");

    }
    else{
        ?>
    <p>Modification echouée veillez remodifier</p>
    <?php


    }
}
  ?>

<?php

/*
           require_once 'connexion.php';
           echo'vous avez acces a la base de données';
            if(isset( $_GET['ID']))
            {
                $ID=$_GET['ID'];
$sql="UPDATE  FROM inscription WHERE ID='$ID'";
    $reqq=$db->query($sql) or die ("Erreur SQL");
    if($reqq)
    {
        echo'supprimer avec succes';
    }
  header("Location:tableau_bordadmin.php");}
  require_once 'connexion.php';
  if(isset($_POST["modifier"]))
   {
 $sql="UPDATE inscription set username'" . $_POST['username']."' "
 .", email'" . $_POST['email '] ."' "
 .", password'" . $_POST['password '] ."' ";
 $reqq=mysql_query($sql, )
  }
  echo'vous avez acces a la base de données';
 if(isset( $_GET['ID']))
 {
     $ID=$_GET['ID'];

$sql="UPDATE  FROM inscription WHERE ID='$ID'";
    $reqq=$db->query($sql) or die ("Erreur SQL");
    if($reqq)
    
  header("Location:formmodifier.php"); 

  */
  


  
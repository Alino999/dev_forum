
<?php
require_once 'connexion.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$ID="";




$req=$db->prepare('UPDATE inscription set username=? email=?, password=?  WHERE ID=?');
    $req-> execute(array(         
      $username, $email, $password, $ID
            
           
      )); 


         
        


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
  


  
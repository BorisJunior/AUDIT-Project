<?php  
session_start();

require_once('access.php');
$ac = new Access();
$con= $ac->connection();

if (!empty($_POST['name'])) {

$project=$_POST['name'];
$id=$_POST['id'];
$ident=$_POST['ident'];


$req1 = $con->prepare("UPDATE ttt_project SET project_name = '$project' WHERE id_project='$ident'");

$req1->execute();


$req = $con->prepare("UPDATE ttt_project SET id_company = '$id' WHERE id_project='$ident'");

$req->execute();

header("location: Project.php");
}  else {
  echo "<div class='alert alert-danger' role='alert'><center>
      VEUILLEZ RENSEIGNER LE CHAMP
     </center></div>";
  }

?>
<?php  
session_start();

require_once('access.php');
$ac = new Access();
$con= $ac->connection();

if (!empty($_POST['company'])) {

$company=$_POST['company'];
$id=$_POST['id'];


$req = $con->prepare("UPDATE ttt_company SET company_name = '$company' WHERE id_company='$id'");

$req->execute();

header("location: Company.php");
}  else {
  echo "<div class='alert alert-danger' role='alert'><center>
      VEUILLEZ RENSEIGNER LE CHAMP
     </center></div>";
  }

?>
<?php  
session_start();

require_once('access.php');
$ac = new Access();
$con= $ac->connection();

if (!empty($_POST['company'])) {

$company=$_POST['company'];


$req = $con->prepare("INSERT INTO ttt_company(company_name)VALUES('$company')");

$req->execute();

header("location: Company.php");
}  else {
  echo "<div class='alert alert-danger' role='alert'><center>
      VEUILLEZ RENSEIGNER LE CHAMP
     </center></div>";
  }

?>
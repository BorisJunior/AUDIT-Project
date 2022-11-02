<?php
session_start();

require_once('access.php');
$ac = new Access();
$con= $ac->connection();

if (!empty($_POST['id'])&&($_POST['name'])) {

$project=$_POST['name'];
$id=$_POST['id'];

$req = $con->prepare("INSERT INTO ttt_task(id_project, task_name)VALUES('$id', '$project')");

$req->execute();

header("location: Task.php");
}  else {
  echo "<div class='alert alert-danger' role='alert'><center>
      VEUILLEZ RENSEIGNER TOUS LES CHAMPS
     </center></div>";
  }

?>
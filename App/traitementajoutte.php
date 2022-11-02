<?php
session_start();
  
require_once('access.php');
$ac = new Access();
$con= $ac->connection();

if (!empty($_POST['id'])&&($_POST['username'])&&($_POST['desc'])&&($_POST['duree'])&&($_POST['datet'])) {

$id=$_POST['id'];
$username=$_POST['username'];
$desc=$_POST['desc'];
$duree=$_POST['duree'];
$datet=$_POST['datet'];


$req = $con->prepare("INSERT INTO ttt_task_log(id_task, username, task_description, task_log_date, task_minutes)VALUES('$id', '$username', '$desc', '$datet', '$duree')");

$req->execute();

header("location: Task_Log.php");
}  else {
  echo "<div class='alert alert-danger' role='alert'><center>
      VEUILLEZ RENSEIGNER TOUS LES CHAMPS
     </center></div>";
  }

?>
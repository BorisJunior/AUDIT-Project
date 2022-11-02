<?php
session_start();

$id = $_POST['id'];
require_once('access.php');
$ac = new access();
$con = $ac->connection();

$req=$con->prepare("DELETE FROM `ttt_task` WHERE `ttt_task`.`id_task` = '$id'");
$req->execute();

header("location: Task.php");
?>
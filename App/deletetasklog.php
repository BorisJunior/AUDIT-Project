<?php
session_start();

$id = $_POST['id'];
require_once('access.php');
$ac = new access();
$con = $ac->connection();

$req=$con->prepare("DELETE FROM `ttt_task_log` WHERE `ttt_task_log`.`id_task_log` = '$id'");
$req->execute();

header("location: Task_Log.php");
?>
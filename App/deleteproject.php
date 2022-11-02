<?php
session_start();

$id = $_POST['id'];
require_once('access.php');
$ac = new access();
$con = $ac->connection();

$req=$con->prepare("DELETE FROM `ttt_project` WHERE `ttt_project`.`id_project` = '$id'");
$req->execute();

header("location: Project.php");
?>
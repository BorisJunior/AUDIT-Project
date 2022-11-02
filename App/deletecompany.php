<?php
session_start();

$id = $_POST['id'];
require_once('access.php');
$ac = new access();
$con = $ac->connection();

$req=$con->prepare("DELETE FROM `ttt_company` WHERE `ttt_company`.`id_company` = '$id'");
$req->execute();

header("location: Company.php");
?>
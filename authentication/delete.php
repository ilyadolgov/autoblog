<?php
session_start();
require_once '../connect.php';

if(!$_SESSION['username']){
	header("Location: enter.php");
	exit;
}


$id=$_GET['id'];
$query = "DELETE FROM `blogs` WHERE `blogs`.`id` = $id";
$result = $mysqli->query($query);
header("Location: ../index.php");
?>
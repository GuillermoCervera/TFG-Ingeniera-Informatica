<?php
ob_start();
session_start();
require_once '../login-config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
}

// Conexion a la base de datos
require_once('bdd.php');
if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])){
	$title = $_POST['title'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = $_POST['color'];
	$sql = "INSERT INTO imputation(title, start, end, color, email) values ('$title', '$start', '$end', '$color', '".$_SESSION["email"]."')";
	echo $sql;
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Error prepare.');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Error execute.');
	}
}
header('Location: '.$_SERVER['HTTP_REFERER']);
?>
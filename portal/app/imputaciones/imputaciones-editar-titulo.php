<?php
// Conexion a la base de datos
require_once('bdd.php');
if (isset($_POST['delete']) && isset($_POST['id'])){
	$id = $_POST['id'];
	$sql = "DELETE FROM imputation WHERE id = $id";
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Error prepare.');
	}
	$res = $query->execute();
	if ($res == false) {
	 print_r($query->errorInfo());
	 die ('Error execute.');
	}
}elseif (isset($_POST['title']) && isset($_POST['color']) && isset($_POST['id'])){
	$id = $_POST['id'];
	$title = $_POST['title'];
	$color = $_POST['color'];
	$sql = "UPDATE imputation SET title = '$title', color = '$color' WHERE id = $id ";
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
header('Location: imputaciones-calendario.php');	
?>
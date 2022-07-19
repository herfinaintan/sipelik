<?php
	include "header.php";
	$id = $_GET['id'];
	$query=mysqli_query($con,"DELETE FROM data_kosan WHERE id_kosan ='$id'");
	if($query){
		header('location:datakosan.php');
	}
?>

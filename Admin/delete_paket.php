<?php
	include "header.php";
	$id = $_GET['id'];
	$query=mysqli_query($con,"DELETE FROM data_paket WHERE id_paket ='$id'");
	if($query){
		header('location:datapaket.php');
	}
?>

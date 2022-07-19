<?php
	session_start();
	if(!$_SESSION['login']){
		header("location:../Code/LogIn.php");
	}
?>
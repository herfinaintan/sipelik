<?php

		$query1=mysqli_query($con,"SELECT * FROM user WHERE username='admin'");
		$query2=mysqli_query($con,"INSERT INTO data_kosan(nama_kosan,alamat_kosan,id_user,status) VALUES ('admin','admin','$query[id_user]','0')");

?>
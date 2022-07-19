<?php
	include "header.php";
	$id = $_GET['id'];
	$level = $_GET['level'];
	$query=mysqli_query($con,"DELETE FROM user WHERE id_user ='$id'");
	if($query){
		echo '<script language="javascript">
            alert ("User Berhasil Di Hapus!");';
    	if($level=='customer'){
    		echo 'window.open("../Admin/user.php","_self");
             </script>';
             exit();
    	}else
    	if($level=='admin'){
    		echo 'window.open("../Admin/admin.php","_self");
             </script>';
             exit();
    	}
	}else 
		echo '<script language="javascript">
              alert ("Registrasi Gagal!");';
        if($level=='customer'){
    		echo 'window.open("../Admin/user.php","_self");
             </script>';
             exit();
    	}else
    	if($level=='admin'){
    		echo 'window.open("../Admin/admin.php","_self");
             </script>';
             exit();
    	}
?>

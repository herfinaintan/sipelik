<?php
	require "koneksi.php";
	session_start();
	#$id=$_SESSION['id'];
	if (isset($_POST['daftar'])) {
		//fungsi acak
		/*function acak($panjang){
			    $karakter= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
			    $string = '';
			    for ($i = 0; $i < $panjang; $i++) {
			  $pos = rand(0, strlen($karakter)-1);
			  $string .= $karakter{$pos};
			    }
			    return $string;
		}*/
		$username=$_POST['username'];
		$nama_user=$_POST['nama_user'];
		$email=$_POST['email'];
		$password=md5($_POST['password']);
		$no_hp=$_POST['no_hp'];
		$level='customer';
		$query=mysqli_query($con,"INSERT INTO user(nama_user,email,username,password,no_hp,level,status_user) VALUES ('$nama_user','$email','$username','$password','$no_hp','$level','1')");
		if ($query) {
			echo '<script language="javascript">
              alert ("Pendaftaran Berhasil Di Lakukan!");
              window.open("../index.php","_self");
              </script>';
              exit();
		}else {
        	echo '<script language="javascript">
              alert ("Pendaftaran Gagal!");
              window.open("../Code/SignUp.php","_self");
              </script>';
              exit();
        }
			
	}else
	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$query1=mysqli_query($con,"SELECT * FROM user WHERE username='$username' AND password='$password' AND level='admin' AND status='0'");
		if (mysqli_num_rows($query1)>0) {
			echo '<script language="javascript">
              alert ("Maaf anda belum terdaftar sebagai Admin Resmi!");
              window.open("../Code/LogIn.php?login=false","_self");
              </script>';
              exit();
		}
		$query2=mysqli_query($con,"SELECT * FROM user WHERE username='$username' AND password='$password' AND level='admin' AND status='2'");
		if (mysqli_num_rows($query2)>0) {
			echo '<script language="javascript">
              alert ("Maaf anda tidak memiliki akses Admin!");
              window.open("../Code/LogIn.php?login=false","_self");
              </script>';
              exit();
		}
		$query = mysqli_query($con,"SELECT * FROM user WHERE username='$username' AND password='$password'");
		$data = mysqli_fetch_assoc($query);
		
		if (mysqli_num_rows($query)>0) {
			session_start();
			$_SESSION['id_user']=$data['id_user'];
			$_SESSION['nama_user']=$data['nama_user'];
			$_SESSION['login'] = true;
			if ($data['level']=="owner") {
				$_SESSION['username']=$username;
				$_SESSION['level']="owner";
				header("location:../Owner/");
			}
			if($data['level']=="admin"){
				$_SESSION['username']=$username;
				$_SESSION['level']="admin";
				header("location:../Admin/");
			}else
			if($data['level']=="customer"){
				$_SESSION['username'] = $username;
				$_SESSION['level'] = "customer";
				header("location:../index.php");
			}
		}else{
			echo '<script language="javascript">
              alert ("Username atau Password salah!");
              window.open("../Code/LogIn.php?username=false&password=false","_self");
              </script>';
              exit();
		}
	}else
	if(isset($_POST['input_pesanan'])) {
		$id_paket=$_POST['idk'];
		$id_user=$_POST['idu'];
		$email=$_POST['email'];
		$waktu_pilih=$_POST['waktu_pilih'];
		$metode_bayar=$_POST['metode_bayar'];
		$keterangan_tambahan=$_POST['keterangan_tambahan'];
		$query=mysqli_query($con,"INSERT INTO pesanan(id_paket,id_user,email,waktu_pilih,metode_bayar,keterangan_tambahan) VALUES ('$id_paket','$id_user','$email','$waktu_pilih','$metode_bayar','$keterangan_tambahan')");
		if ($query) {
			echo '<script language="javascript">
              alert ("Pesanan Paket Perawatan untuk HARI INI Berhasil! Silahkan lakukan pembayaran");
              window.open("../","_self");
              </script>';
              exit();
		}else{
			echo '<script language="javascript">
              alert ("Pesanan Gagal!");
              window.open("../","_self");
              </script>';
              exit();
		}
	}else
	if (isset($_POST['tambah_ulasan'])) {
	$nama_pengirim = $_POST['nama_pengirim'];
	$nama_paket=$_POST['nama_paket'];
	$isi_ulasan = $_POST['isi_ulasan'];
	$query_ulasan = mysqli_query($con,"INSERT INTO ulasan (nama_pengirim,nama_paket,isi_ulasan) VALUES ('$nama_pengirim','$nama_paket','$isi_ulasan')");
	if ($query_ulasan) {
		echo '<script language="javascript">
              alert ("Ulasan telah terkirim!");
              window.open("../","_self");
              </script>';
              exit();
	}else{
		echo '<script>alert("Error");</script>';
		}
		
	}else
	if (isset($_POST['input_paket'])) {
		$nama_paket=$_POST['nama_paket'];
		$jenis_paket=$_POST['jenis_paket'];
		$keterangan = $_POST['keterangan'];
		$harga_total = $_POST['harga_total'];
		$gambar = $_POST['gambar'];
		$jumlah_tersedia = $_POST['jumlah_tersedia'];

		#if(!empty($gambar)){
			#move_uploaded_file($_FILES['gambar']['tmp_name'], "../Upload/".$gambar);
		#}
			
		$query=mysqli_query($con,"INSERT INTO data_paket VALUES ('','$nama_paket','$jenis_paket','$keterangan','$harga_total','$gambar','$jumlah_tersedia','1')");
		if ($query) {
			echo '<script language="javascript">
              alert ("Input Data Paket Perawatan Berhasil!");
              window.open("../Admin/datapaket.php","_self");
              </script>';
              exit();
		}
	}else
	if (isset($_POST['update_paket'])) {
		$id_paket=$_POST['id_paket'];
		$nama_paket = $_POST['nama_paket'];
		$jenis_paket = $_POST['jenis_paket'];
		$keterangan = $_POST['keterangan'];
		$harga_total = $_POST['harga_total'];
		$gambar = $_POST['gambar'];
		$jumlah_tersedia = $_POST['jumlah_tersedia'];
		#if(!empty($gambar)){
			#move_uploaded_file($_FILES['gambar']['tmp_name'], "../Upload/".$gambar);
			#$query = mysqli_query($con,"UPDATE data_paket SET gambar = '$gambar' WHERE id_paket='$id_paket'");
		#}
		$query = mysqli_query($con,"UPDATE data_paket SET nama_paket='$nama_paket', jenis_paket='$jenis_paket', keterangan='$keterangan', harga_total='$harga_total',gambar_paket='$gambar', jumlah_tersedia='$jumlah_tersedia' WHERE id_paket='$id_paket'");
		if ($query) {
			echo '<script language="javascript">
              alert ("Pembaruan Data Paket Perawatan Berhasil!");
              window.open("../Admin/datapaket.php","_self");
              </script>';
              exit();
		}else
		if (!$query) {
			echo '<script language="javascript">
              alert ("Error");
             </script>';
              exit();
		}
	}else
	if (isset($_POST['konfirmasi'])) {
		$query1=mysqli_query($con,"SELECT * FROM pesanan WHERE id_user='$_SESSION[id_user]' AND id_kosan='$_POST[idk]' ");
		$data=mysqli_fetch_assoc($query1);
		$id_user=$_SESSION['id_user'];
		$id_kosan=$_POST['idk'];
		$id_pesanan=$_POST['idp'];
		$tanggal_transfer=$_POST['tanggal_transfer'];
		$jumlah_transfer = $_POST['jumlah_transfer'];
		$catatan=$_POST['catatan'];
		$bukti_transfer=$_FILES['bukti_transfer']['name'];
		move_uploaded_file($_FILES['bukti_transfer']['tmp_name'], "../Upload/".$bukti_transfer);
		$query=mysqli_query($con,"INSERT INTO keuangan VALUES ('','$id_user','$id_pesanan','$id_kosan','$tanggal_transfer','$jumlah_transfer','$bukti_transfer','$catatan','0')");
		if ($query) {
			echo '<script language="javascript">
              alert ("Transaksi Berhasil Terkirim, Tunggu Konfirmasi dari Admin!");
              window.open("../","_self");
              </script>';
              exit();
		}else{
			echo '<script language="javascript">
              alert ("Transaksi Gagal!");
              window.open("../Code/keuangan.php","_self");
              </script>';
              exit();
		}
	}else
	if (isset($_POST['confirm_pesanan'])) {
    	$idp=$_POST['idp'];
        $query=mysqli_query($con,"UPDATE pesanan SET status_pesanan='1' WHERE id_pesanan='$idp'");
       	# $query1=mysqli_query($con, "UPDATE data_paket JOIN pesanan ON data_paket.id_paket=pesanan.id_paket SET sudah_diisi='$sudah_diisi++' WHERE id_pesanan='$idp'");
        if ($query) {
	            echo '<script language="javascript">
	              alert ("Pesanan Dikonfirmasi!");
	              window.open("../Admin/pesanan.php","_self");
	              </script>';
	              exit();
        }
    }else
    if (isset($_POST['refuse_pesanan'])) {
    	$idp=$_POST['idp'];
        $query=mysqli_query($con,"UPDATE pesanan SET status_pesanan='2' WHERE id_pesanan='$idp'");
        if ($query) {
	            echo '<script language="javascript">
	              alert ("Pesanan Ditolak!");
	              window.open("../Admin/pesanan.php","_self");
	              </script>';
	              exit();
        }
    }else
	if (isset($_POST['confirm_keuangan'])) {
		$idk=$_POST['idk'];
        $query=mysqli_query($con,"UPDATE keuangan SET status_keuangan='1' WHERE id_keuangan='$idk'");
        if ($query) {
	            echo '<script language="javascript">
	              alert ("Pembayaran Dikonfirmasi!");
	              window.open("../Admin/keuangan.php","_self");
	              </script>';
	              exit();
        }
    }else
    if (isset($_POST['refuse_keuangan'])) {
    	$idk=$_POST['idk'];
        $query=mysqli_query($con,"UPDATE keuangan SET status_keuangan='2' WHERE id_keuangan='$idk'");
        if ($query) {
	            echo '<script language="javascript">
	              alert ("Pembayaran Ditolak!");
	              window.open("../Admin/keuangan.php","_self");
	              </script>';
	              exit();
        }
    }else
	if (isset($_POST['confirm_user'])) {
		$idu=$_POST['idu'];
        $query=mysqli_query($con,"UPDATE user SET status_user='1' WHERE id_user='$idk'");
        if ($query) {
        	if($_SESSION['level']=='admin'){
	            echo '<script language="javascript">
	              alert ("Pembayaran Dikonfirmasi!");
	              window.open("../Admin/keuangan.php","_self");
	              </script>';
	              exit();
	        }else
	        if($_SESSION['level']=='superadmin'){
	        	echo '<script language="javascript">
	              alert ("Pesanan Dikonfirmasi!");
	              window.open("../SuperAdmin/keuangan.php","_self");
	              </script>';
	              exit();
	        }
        }
    }else
    if (isset($_POST['refuse_user'])) {
    	$idu=$_POST['idu'];
        $query=mysqli_query($con,"UPDATE user SET status_user='2' WHERE user='$idk'");
        if ($query) {
        	if($_SESSION['level']=='admin'){
	            echo '<script language="javascript">
	              alert ("Pembayaran Ditolak!");
	              window.open("../Admin/keuangan.php","_self");
	              </script>';
	              exit();
	        }else
	        if($_SESSION['level']=='superadmin'){
	        	echo '<script language="javascript">
	              alert ("Pesanan Ditolak!");
	              window.open("../SuperAdmin/keuangan.php","_self");
	              </script>';
	              exit();
	        }
        }
    }else
    if (isset($_POST['input_user'])) {
    	$nama_user=$_POST['nama_user'];
    	$email=$_POST['email'];
    	$username=$_POST['username'];
    	$password=md5($_POST['password']);
    	$no_hp=$_POST['no_hp'];
    	$level=$_POST['level'];
    	$query=mysqli_query($con,"INSERT INTO user VALUES ('','$nama_user','$email','$username','$password','$no_hp','$level','1')");
    	if($query){
    		echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");';
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
		}else {
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
    	}
    }else
   if (isset($_POST['update_user'])) {
    	#$cond = " ";
    	$id=$_POST['id_user'];
		$nama_user = $_POST['nama_user'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$no_hp = $_POST['no_hp'];

    	/*if (!empty($_POST['password'])) {
			$password = md5($_POST['password']);
			$cond .= ",password='$password'";
		}*/
		#$query=mysqli_query($con,"UPDATE FROM user");
		$query=mysqli_query($con,"UPDATE user SET nama_user='$nama_user', email='$email', username='$username', password='$password', no_hp='$no_hp' WHERE id_user='$id' ");
		if(!$query){
			echo '<script language="javascript">
	              alert ("Update gagal!");';
    			echo 'window.open("../Admin/user.php","_self");
             	</script>';
             	exit();
		}else
    	if($query){
    		echo '<script language="javascript">
              alert ("	Update Berhasil Di Lakukan!");';
    			echo 'window.open("../Admin/user.php","_self");
              </script>';
              exit();
		}else 
        	echo '<script language="javascript">
              alert ("Registrasi Gagal!");';
    			echo 'window.open("../Admin/user.php","_self");
              </script>';
              exit();
	}else
	 if (isset($_POST['update_admin'])) {
    	#$cond = " ";
    	$id=$_POST['id_user'];
		$nama_user = $_POST['nama_user'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$no_hp = $_POST['no_hp'];

    	/*if (!empty($_POST['password'])) {
			$password = md5($_POST['password']);
			$cond .= ",password='$password'";
		}*/
		#$query=mysqli_query($con,"UPDATE FROM user");
		$query=mysqli_query($con,"UPDATE user SET nama_user='$nama_user', email='$email', username='$username', password='$password', no_hp='$no_hp' WHERE id_user='$id' ");
		if(!$query){
			echo '<script language="javascript">
	              alert ("Update gagal!");';
    			echo 'window.open("../Admin/admin.php","_self");
             	</script>';
             	exit();
		}else
    	if($query){
    		echo '<script language="javascript">
              alert ("	Update Berhasil Di Lakukan!");';
    			echo 'window.open("../Admin/admin.php","_self");
              </script>';
              exit();
		}else 
        	echo '<script language="javascript">
              alert ("Registrasi Gagal!");';
    			echo 'window.open("../Admin/admin.php","_self");
              </script>';
              exit();
         }
?>
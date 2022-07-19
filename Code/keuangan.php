<?php
	include "../Config/koneksi.php";
	session_start();
	if(!$_SESSION['id_user']){$log= "LogIn.php";$log1= "Log In";}else{$log= "LogOut.php";$log1= "Log Out";}
	$query_pesanan=mysqli_query($con,"SELECT * FROM pesanan JOIN data_paket ON pesanan.id_paket=data_paket.id_paket JOIN user ON pesanan.id_user=user.id_user WHERE pesanan.id_user='$_SESSION[id_user]' AND status_pesanan='1'");
	$query_paket=mysqli_query($con, "SELECT * FROM pesanan JOIN data_paket ON pesanan.id_paket=data_paket.id_paket WHERE pesanan.id_user='$_SESSION[id_user]' AND status_pesanan='1' ORDER BY nama_paket ASC");
	$data_pesanan=mysqli_fetch_assoc($query_pesanan);
	$data_paket=mysqli_fetch_assoc($query_paket);
	if (empty($data_pesanan)) {
		echo '<script language="javascript">
              alert ("Pesanan Anda Belum di Konfirmasi!");
              window.open("../","_self");
              </script>';
              exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Konfirmasi Pembayaran</title>
	<link rel="icon" type="images" href="../Assets/img/LOGO.jpeg">
  <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../Assets/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../Assets/css/Style.css">
  <style type="text/css">
    .site-header {
  background-color: #96858F;
}
.site-header a {
  color: #fff;
  transition: ease-in-out color .15s;
}
.site-header a:hover {
  color: #fff;
  text-decoration: none;
}
  </style>
</head>
<body style="background-color: #f1f1f1">
  <nav class="navbar site-header" style="margin-bottom: 20px;box-shadow: 0 0 10px 0 rgba(0,0,0,1) !important;">
    <div class="container">
      <a class="" href="../">
            <img src="../Assets/img/LOGO.jpeg" width="120px" height="80px">
      </a>
      <div class="" style="float: right;">
        <a id="pesanan" class="" href="paket.php">Paket Kecantikan</a>
       	<a class="px-3" href="pesanan.php?idu=<?=$_SESSION['id_user'];?>&idk=0">Pemesanan</a>
		<a class="px-3" href="keuangan.php">Konfirmasi Pembayaran</a>
		<a class="px-3" href="SignUp.php">Pendaftaran</a>
		<a class="px-3" href="ulasan.php?id=<?$_SESSION['id_user']?>">Ulasan</a>
		<a class="px-3" href="AboutUs.php">About Us</a>
		<a class="py-2 d-md-inline-block" href="<?=$log?>" style="border:1px solid white;border-radius: 8px;padding: 5px;margin-left: 20px"><?=$log1?></a>   	
      </div>
    </div>
  </nav>
	<div class="container keuangan" style="width:40%">
	<form action="../Config/data.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="idp" value="<?=$data_pesanan['id_pesanan'];?>">
		<div class="card card-header" style="background-color: #9DA0A7">
			<h1 style="font-size: 30px"><center>Konfirmasi Pembayaran</center></h1>
		</div>
		<div class="card card-body" style="background-color: #FAFBF6">
		<table>
			<tr>
				<td>Nama Customer</td>
			</tr>
			<tr>
				<td><input type="text" name="nama_user" value="<?=$data_pesanan['nama_user'];?>" style="width:300px; height:30px" disabled></td>
			</tr>
			<tr>
				<td><br>Email</td>
			</tr>
			<tr>
				<td><input type="text" name="email" value="<?=$data_pesanan['email'];?>" style="width:350px; height:30px" disabled></td>
			</tr>
			<tr>
				<td><br>Nama Paket Perawatan</td>
			</tr>
			<tr>
				<td><select name="idk"><?php do{ ?>
					<option value="<?=$data_paket['id_paket'];?>"><?=$data_paket['nama_paket'];?></option>
				<?php }while($data_paket=mysqli_fetch_assoc($query_paket));?>
				</select>
					</td>
			</tr>
			<tr>
				<td><br>Tanggal Transfer</td>
			</tr>
			<tr>
				<td><input type="date" name="tanggal_transfer" style="width:200px; height:30px"></td>
			</tr>
			<tr>
				<td><br>Nilai Transfer</td>
			</tr>
			<tr>
				<td><input type="text" name="jumlah_transfer" style="width:300px; height:30px;"></td>
			</tr>
			<tr>
				<td><br>Bukti Pembayaran</td>
			</tr>
			<tr>
				<td><input type="file" name="bukti_transfer"></td>
			</tr>
			<tr>
				<td><br>Catatan Tambahan</td>
			</tr>
			<tr>
				<td><textarea name="catatan" rows="8" cols="60"></textarea></td>
			</tr><br><br>
			<tr>
				<td><input class="btn" type="submit" name="konfirmasi" value="konfirmasi" style="background-color: #244065; color: white"></td>
			</tr>
		</table>
	</div>
	</form><br><br>
</div>
	<div class="footer" style="width:100%">
	  <div class="card site-header text-white" id="contact_us">
	    <div class="card-img-overlay" style="position:sticky;">
	      <p class="card-text text-center">
	        <a href="https://www.instagram.com/herfinaintan" target="_blank" style="color:white;"><i class="fa fa-instagram fa-2x px-2"></i></a>
          <a href="https://api.whatsapp.com/send?phone=082223766700&text=Halo Customer Beauty Klinik" target="_blank" style="color:white;"><i class="fa fa-phone fa-2x px-2"></i></a>
          <a href="https://www.facebook.com/herfinaintan" target="_blank"style="color:white;"><i class="fa fa-facebook fa-2x px-2"></i></a>
          </p>
       	 <h5 class="card-title" style="float:right">Copyright &copy Sipelik 2020</h5>
	    </div>
	  </div>
	</div>
	</div>
	<script src="../Assets/js/jquery.js"></script> 
	<script src="../Assets/js/popper.js"></script> 
	<script src="../Assets/js/bootstrap.js"></script>
</body>
</html>
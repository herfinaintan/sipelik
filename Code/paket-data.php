<?php
	error_reporting(0);
	include "../config/koneksi.php";
	session_start();
	if(!$_SESSION['id_user']){$log= "LogIn.php";$log1= "Log In";}else{$log= "LogOut.php";$log1= "Log Out";}
	$paket=$_GET['paket'];
	$query=mysqli_query($con,"SELECT * FROM data_paket  WHERE id_paket='$paket'");
	$data=mysqli_fetch_assoc($query);
	$query_ulasan=mysqli_query($con, "SELECT * FROM ulasan JOIN user ON ulasan.id_user=user.id_user WHERE id_paket='$paket'");
	$data_ulasan=mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Paket <?=$data['nama_paket'];?></title>
    <link rel="icon" type="images" href="../Assets/img/LOGO.jpeg">
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../assets/css/Style.css">
	<link rel="stylesheet" type="text/css" href="../Assets/css/font-awesome.css">
	<style type="text/css">
		.site-header {
  background-color:  #96858F;
}
.site-header a {
  color: #fff;
  transition: ease-in-out color .15s;
}
.site-header a:hover {
  color: #fff;
  text-decoration: none;
}
.judul{
	text-align: center;
	text-transform: uppercase;
}
.judul h1{
	padding: 40px;
}
h4{
	text-decoration: underline;
	text-transform: capitalize;
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
	<div class="container">
		<div class="" style="padding-bottom: 30px">
			<img src="../Upload/<?=$data['gambar_paket'];?>" width="100%" alt="Gambar Paket">
		</div>
	</div>
	<div style="background-color: white;">
		<div class="container">
			<div class="judul">
				<h1><?=$data['nama_paket'];?></h1>
			</div>
			<div class="" style="width: 1000px">
				<h4>Jenis Paket:</h4>
				<p><?=$data['jenis_paket'];?></p>

				<h4>Deskripsi Paket Perawatan:</h4>
				<p><?=$data['keterangan'];?></p>

				<h4>Harga Paket Perawatan</h4>
				<p>Rp <?=$data['harga_total']?></p>
				
				<h4>Ulasan</h4>
				<a href="ulasan.php" style="float: left;">Ingin Mengajukan Ulasan?</a>
				<h6><?=$data_ulasan['nama_user'];?></h6><a href="ulasan.php">&nbsp&nbsp&nbsp&nbspTulis Ulasan<br></a>
				<p><?=$data_ulasan['isi_ulasan'];?></p>
				<a  href="pesanan.php?idu=<?=$_SESSION['id_user'];?>&idk=<?=$paket;?>"><button class="btn" style="float:left; background-color: #4C495C; color: white;">Booking</button></a><br><br>
		</div>
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
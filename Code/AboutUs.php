<?php
	error_reporting(0);
	include "../Config/data.php";
	if(!$_SESSION['id_user']){$log= "LogIn.php";$log1= "Log In";}else{$log= "LogOut.php";$log1= "Log Out";}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tentang Kami</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="icon" type="images" href="../Assets/img/LOGO.jpeg">
	<link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../Assets/css/Style.css">
	<style type="text/css">
		.site-header {
  background-color: #96858F;;
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
	<div class="container">
	<div class="bd-example">
	<div id="carouselExampleCaptions carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" style="text-align: center;">
					<div class="carousel-item active">
						<img src="../Assets/img/resepsionis.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
						</div>
					</div>
					<div class="carousel-item">
						<img src="../Assets/img/konsultasi.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
						</div>
					</div>
					<div class="carousel-item">
						<img src="../Assets/img/ruang.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<section class="text-center" style="padding: 3% 0">
		<h1 style="margin-top: 3%">Tentang Kami</h1>
		<p style="padding: 1% 30% 5% 30%">SIPELIK adalah sebuah website untuk melakukan pemesanan paket perawatan kecantikan yang bertempat di Purwokerto, Kab.Banyumas, Jawa Tengah. Kami menyediakan informasi mengenai data paket perawatan secara detail sehingga memudahkan customer memilih paket perawatan yang diinginkan. Tujuan dari website ini adalah mempermudah pemesanan atau reservasi paket perawatan sehingga customer bisa melakukan reservasi dimana saja tanpa harus mengantri lama</p>
		<h1 style="margin-top: 1%">Lokasi</h1>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.352830413413!2d109.23252061402452!3d-7.426149594642275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e6297c4cee7%3A0xf85fd2d37ee0e082!2sLBC%20(London%20Beauty%20Centre)!5e0!3m2!1sid!2sid!4v1589175693981!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</section>
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
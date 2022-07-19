<?php
	error_reporting(0);
	include "config/koneksi.php";
	session_start();

	$query=mysqli_query($con,"SELECT * FROM data_paket WHERE status_paket='1' ORDER BY id_paket DESC");
	$data=mysqli_fetch_assoc($query);
	if(!$_SESSION['id_user']){$log= "Code/LogIn.php";$log1= "Log In";}else{$log= "Code/LogOut.php";$log1= "Log Out";}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIPELIK</title>
    <link rel="icon" type="images" href="Assets/img/LOGO.jpeg">
	<link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="Assets/css/Style.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/font-awesome.css">
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
.d-flex{
	display: none;
}
.nav-login{
	margin-left: 20%;
}
.collapse:not(.show){
	display: block;
}
.baris{
	display: flex;
  flex-wrap: wrap;
}
.form-control{
	display:inline-block;
}
.collapse2:not(.show){
	display: none;
}
@media(min-width: 430px){
	.nav-login{
		margin-left: 36.5%;
	}

}
@media(min-width: 480px){
	.nav-login{
		margin-left: 43%;
	}
}
@media(min-width: 527px){
	.nav-login{
		margin-left: 47%;
	}
}
@media(min-width: 768px){
	.nav-login{
		margin-left: 63%;
	}
	.collapse:not(.show){
		display: none;
	}
	.collapse1:not(.show){
		display: none;
	}
	.collapse2:not(.show){
		display: block;
	}
}
@media(min-width: 992px){
	.d-flex{
		display: block;
	}
	.nav-login{
		margin-left: 72.5%
	}
	.collapse:not(.show){
		display: none;
	}
	.collapse1:not(.show){
		display: block;
	}
}
@media(min-width: 1086px){
	.nav-login{
		margin-left: 77%
	}
	.collapse:not(.show){
		display: block;
	}
	.collapse1:not(.show){
		display: block;
	}
}
.w-75{
	width: 70%;
}
	</style>
</head>
<body style="background-color: #f1f1f1">
	<nav class="navbar site-header" style="margin-bottom: 20px;box-shadow: 0 0 10px 0 rgba(0,0,0,1) !important;">
		<div class="container">
			<a class="" href="index.php">
			      <img src="Assets/img/LOGO.jpeg" width="120px" height="80px">
			</a>
			<div class="" style="float: right;">
				<a id="pesanan" class="" href="Code/paket.php">Paket Kecantikan</a>
       	        <a class="px-3" href="Code/pesanan.php?idu=<?=$_SESSION['id_user'];?>&idk=0">Pemesanan</a>
			    <a class="px-3" href="Code/keuangan.php">Konfirmasi Pembayaran</a>
			    <a class="px-3" href="Code/SignUp.php">Pendaftaran</a>
			    <a class="px-3" href="Code/ulasan.php?id=<?$_SESSION['id_user']?>">Ulasan</a>
			    <a class="px-3" href="Code/AboutUs.php">About Us</a>
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
						<img src="Upload/gambar1.jpeg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
						</div>
					</div>
					<div class="carousel-item">
						<img src="Upload/gambar2.jpeg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
						</div>
					</div>
					<div class="carousel-item">
						<img src="Upload/gambar3.jpeg" class="d-block w-100" alt="...">
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
		<style type="text/css">
			a{
				color: black;
			}
			a:hover{
				text-decoration: none;
			}
		</style>
		<br><br>
		<h1 align="center">Produk Kami</h1>
		<br>
		<div><?php echo 
			'<div class="d-md-flex flex-md-equal w-75 my-md-3 pl-md-3" style="margin-bottom:30px">'; for($num=0;$num<5;$num++){; 
				if($num%5==0){
					echo '<a href="Code/paket-data.php?paket='.$data['id_paket']; 
					echo '"> <div class="mr-md-3 text-center text-black collapse" style="border:1px solid black;border-radius: 30px">';
				    echo '<div class="my-3">';?>
				    <img src="Upload/<?=$data['gambar_paket'];?>" width="200px" height="200px"><hr>
					<h6 class="display-5"><?=$data['nama_paket'];?></h6><hr>
				    </div>
					</div></a><?php }else if($num%4==0){
					echo '<a href="Code/paket-data.php?paket='.$data['id_paket']; 
					echo '">  <div class="mr-md-3 text-center text-black collapse1 collapse" style="border:1px solid black;border-radius: 30px">';
				    echo '<div class="my-3">';?>
				    <img src="Upload/<?=$data['gambar_paket'];?>" width="200px" height="200px"><hr>
					<h6 class="display-5"><?=$data['nama_paket'];?></h6><hr>
				    </div>
					</div></a><?php }else{
					echo '<a href="Code/paket-data.php?paket='.$data['id_paket']; 
					echo '"> <div class="mr-md-3 text-center text-black" style="border:1px solid black;border-radius: 30px">';
				    echo '<div class="my-3">';?>
				    <img src="Upload/<?=$data['gambar_paket'];?>" width="200px" height="200px"><hr>
					<h6 class="display-5"><?=$data['nama_paket'];?></h6><hr>
				    </div>
					</div></a><?php }$data=mysqli_fetch_assoc($query);?>
				<?php }?>
			</div>
			<div class="" style="margin-left: 45%;margin-top: 5%;margin-bottom: 5%;">
				<a class="btn btn-primary" href="Code/paket.php" style="background-color: #6D7993">Lihat Semua</a>
			</div>
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
	<script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>
</body>
</html>
<?php
error_reporting(0);
	$idk=$_GET['id'];
	include "../Config/data.php";
	if(!$_SESSION['id_user']){$log= "LogIn.php";$log1= "Log In";}else{$log= "LogOut.php";$log1= "Log Out";}
	$query_kosan=mysqli_query($con,"SELECT * FROM data_kosan WHERE id_kosan='$idk'");
	$data_kosan=mysqli_fetch_assoc($query_kosan);
?>
<!DOCTYPE html>
<html>
<head>
	<title>review kosan</title>
	<link rel="stylesheet" type="text/css" href="review.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="icon" type="images" href="../Assets/img/1575990456132.png">
	<link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../Assets/css/Style.css">
	<style type="text/css">
		.site-header {
  background-color: rgba(0, 0, 50, 1);
}
.site-header a {
  color: #fff;
  transition: ease-in-out color .15s;
}
.site-header a:hover {
  color: #fff;
  text-decoration: none;
}
.rating{
	position: absolute;
	top: 50%;
	left: 70%;
	transform: translate(-170%,-200%) rotateY(180deg);
	display: flex;
}
	</style>
</head>
<body style="background-color: #f1f1f1">
	<nav class="navbar site-header" style="margin-bottom: 20px;box-shadow: 0 0 10px 0 rgba(0,0,0,1) !important;">
		<div class="container">
			<a class="" href="../">
			      <img src="../Assets/img/1575990470367.png" width="120px" height="60px">
			</a>
			<div class="" style="float: right;">
				<a id="pesanan" class="" href="kosan.php">Info Kost</a>
				<a class="px-3" href="pesanan.php?idu=<?=$_SESSION['id_user'];?>&idk=0">Pemesanan</a>
				<a class="px-3" href="SignUp.php">Pendaftaran</a>
				<a class="px-3" href="keuangan.php">Transaksi</a>
				<a class="px-3" href="faq/index.php?id<?=$data_user['id_user']?>">FAQ</a>
				<a class="px-3" href="AboutUs.php">About Us</a>
				<a class="py-2 d-md-inline-block" href="<?=$log?>" style="border:1px solid white;border-radius: 8px;padding: 5px;margin-left: 20px"><?=$log1?></a>			
			</div>
		</div>
	</nav>
	<div class="container" style="width: 50%">
	<div class="card card-header text-center">
		<h2>Ulasan</h2>
	</div>

	<div class="card card-body">
		<h3>Nama Kosan</h3>
		<input type="text" name="nama_kosan" value="<?=$data_kosan['nama_kosan']?>" disabled="">
		<h3>Rating Bintang</h3>
		<div class="rating">
			<input type="radio" name="star" id="star1" value="1"><label for="star1"></label>
			<input type="radio" name="star" id="star2" value="2"><label for="star2"></label>
			<input type="radio" name="star" id="star3" value="3"><label for="star3"></label>
			<input type="radio" name="star" id="star4" value="4"><label for="star4"></label>
			<input type="radio" name="star" id="star5" value="5"><label for="star5"></label>
		</div>
		<h3><br><br><br><br>Tulis Review</h3>
		<textarea name="review" rows="10" cols="90"></textarea><br>
		<input type="submit" name="submit" value="submit">
	</div>
</div>
	<div class="footer" style="width:100%">
	  <div class="card site-header text-white" id="contact_us">
	    <div class="card-img-overlay" style="position:sticky;">
	      <p class="card-text text-center">
	        <a href="https://www.instagram.com/riyanpramudya" target="_blank" style="color:white;"><i class="fa fa-instagram fa-2x px-2"></i></a>
	        <a href="https://api.whatsapp.com/send?phone=082223766700&text=Halo B-Kost" target="_blank" style="color:white;"><i class="fa fa-phone fa-2x px-2"></i></a>
	        <a href="https://www.facebook.com/atha.narentha13" target="_blank"style="color:white;"><i class="fa fa-facebook fa-2x px-2"></i></a>
	        </p>
	      <h5 class="card-title" style="float:right">Copyright &copy B-Kost</h5>
	    </div>
	  </div>
	</div>
	</div>
	<script src="../Assets/js/jquery.js"></script> 
	<script src="../Assets/js/popper.js"></script>
	<script src="../Assets/js/bootstrap.js"></script>
</body>
</html>
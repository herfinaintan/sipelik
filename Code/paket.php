<?php
	error_reporting(0);
	include "../config/koneksi.php";
	session_start();
	$limit=5;
	$halaman=isset($_GET['halaman']) ? $_GET['halaman'] : 1;
	if (empty($halaman)) {
		$halaman=1;
	}
	$start=($halaman-1)*$limit;

	$query=mysqli_query($con,"SELECT * FROM data_paket WHERE status_paket='1' LIMIT $start,$limit");
	$data=mysqli_fetch_assoc($query);

	$query1=mysqli_query($con,"SELECT count(id_paket) AS id_paket FROM data_paket WHERE status_paket='1'");
	$count=$query1->fetch_all(MYSQLI_ASSOC);
	$total=$count[0]['id_paket'];
	$halaman1 = ceil( $total / $limit );

	if($halaman==1){
		$disabled="disabled";
	}else {
		$disabled="";
	} 
	if($halaman==$halaman1){
		$disabled1="disabled";
	}
	$sebelumnya=$halaman -1;
	$setelahnya=$halaman +1;


	if(!$_SESSION['id_user']){$log= "LogIn.php";$log1= "Log In";}else{$log= "LogOut.php";$log1= "Log Out";}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Paket Perawatan</title>
    <link rel="icon" type="images" href="../Assets/img/LOGO.jpeg">
	<link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../Assets/css/Style.css">
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
	<div class="container" style="padding-top: 80px;padding-bottom: 110px">
		<!--form action="" method="GET">
			<label>Filter :</label>
			<select name="filter" class="form-control" style="width:25%;display: inline-block;">
				<option value="0">-- Pilih --</option>
				<option value="1">Harga Terendah ke Tinggi</option>
				<option value="2">Harga Tertinggi ke Terendah</option>
			</select>
			<div style="float:right;">
				<label>Search :</label>
				<input type="text" name="search" placeholder="Search" class="form-control" style="width: 70%;display: inline-block;">
			</div>
		</form-->
		<style type="text/css">
			a{
				color: black;
			}
			a:hover{
				text-decoration: none;
			}
		</style>
		<div><?php $num=0; echo 
			'<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3" style="margin-bottom:30px">'; do{$num++; 
				if($num%6==0){
					echo '<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">';
					echo '<a href="paket-data.php?paket='.$data['id_paket']; 
					echo '">  <div class="mr-md-3 text-center text-black" style="border:1px solid black;border-radius: 30px;width:200px">';
				    echo '<div class="my-3">';?>
				    <img src="../Upload/<?=$data['gambar_paket'];?>" width="200px" height="200px" style="border-radius: 10px"><hr>
					<h6 class="display-5"><?=$data['nama_paket'];?></h6><hr>
				    </div>
					</div></a><?php }else if($num%5==0){
					echo '<a href="paket-data.php?paket='.$data['id_paket']; 
					echo '"> <div class="mr-md-3 text-center text-black collapse" style="border:1px solid black;border-radius: 30px;width:200px">';
				    echo '<div class="my-3">';?>
				    <img src="../Upload/<?=$data['gambar_paket'];?>" width="200px" height="200px" style="border-radius: 10px"><hr>
					<h6 class="display-5"><?=$data['nama_paket'];?></h6><hr>
				    </div>
					</div>
					</div></a><?php }else if($num%4==0){
					echo '<a href="paket-data.php?paket='.$data['id_paket']; 
					echo '">  <div class="mr-md-3 text-center text-black collapse1 collapse" style="border:1px solid black;border-radius: 30px;width:200px">';
				    echo '<div class="my-3">';?>
				    <img src="../Upload/<?=$data['gambar_paket'];?>" width="200px" height="200px" style="border-radius: 10px"><hr>
					<h6 class="display-5"><?=$data['nama_paket'];?></h6><hr>
				    </div>
					</div></a><?php }else{
					echo '<a href="paket-data.php?paket='.$data['id_paket']; 
					echo '"> <div class="mr-md-3 text-center text-black" style="border:1px solid black;border-radius: 30px;width:200px">';
				    echo '<div class="my-3">';?>
				    <img src="../Upload/<?=$data['gambar_paket'];?>" width="200px" height="200px" style="border-radius: 10px"><hr>
					<h6 class="display-5"><?=$data['nama_paket'];?></h6><hr>
				    </div>
					</div></a><?php }?>
			<?php }while($data=mysqli_fetch_assoc($query)); ?>
			</div>
		</div>
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
		    	<li class="page-item <?=$disabled?>">
		    		<a class="page-link" href="paket.php?halaman=<?=$sebelumnya;?>" <?php 

		    		?> >Sebelum</a>
		    	</li>
		    	<?php for ($i=1; $i <= $halaman1 ; $i++) : ?>		    	
			    <li class="page-item"><a class="page-link" href="paket.php?halaman=<?=$i;?>"><?=$i;?></a></li>
				<?php endfor; ?>
			    <li class="page-item <?=$disabled1?>">
			    	<a class="page-link" href="paket.php?halaman=<?=$setelahnya;?>">Setelah</a>
			    </li>
			</ul>
		</nav>
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
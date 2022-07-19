<?php
	include "../Config/koneksi.php";
	session_start();
	if(!$_SESSION['id_user']){$log= "LogIn.php";$log1= "Log In";}else{$log= "LogOut.php";$log1= "Log Out";}	

	$query_paket=mysqli_query($con,"SELECT * FROM data_paket WHERE id_paket=$_GET[idk]");
	$data_paket=mysqli_fetch_assoc($query_paket);
	$query_user=mysqli_query($con,"SELECT * FROM user WHERE id_user=$_GET[idu]");
	$data_user=mysqli_fetch_assoc($query_user);

	if($_SESSION['level']=='admin'){
		echo '<script language="javascript">
              alert ("Admin tidak dapat melakukan pemesanan!");
              window.open("../Admin/","_self");
              </script>';
              exit();
	}else
	if($_SESSION['level']=='owner'){
		echo '<script language="javascript">
              alert ("Pemilik tidak dapat melakukan pemesanan!");
              window.open("../SuperAdmin/","_self");
              </script>';
              exit();
	}
	if ($_GET['idk']==0) {
		echo '<script language="javascript">
              alert ("Anda Harus Memilih Paket Perawatan Dahulu!");
              window.open("paket.php?halaman=1","_self");
              </script>';
              exit();	
	}
	if ($_GET['idu']==0) {
		echo '<script language="javascript">
              alert ("Anda Harus Login Dahulu!");
              window.open("LogIn.php","_self");
              </script>';
              exit();
          }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pemesanan</title>
	<link rel="icon" type="image" href="../Assets/img/LOGO.jpeg">
  <link rel="stylesheet" type="text/css" href="../Assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../Assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../Assets/css/card.css">
  <link rel="stylesheet" type="text/css" href="../Assets/css/Style.css">
  <link rel="icon" type="images" href="../Assets/img/1575990456132.png">
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
    <div class="container-fluid" style="width: 100%;max-width: 500px;padding: 15px;margin: auto;" >
	    <div class="card" style="margin-top: 7%;background-color: #FAFBF6">
	    	<div class="text-center card-header" style="background-color: #9DA0A7">
	        	<h2>Pemesanan</h2>
	    	</div>
	      	<div class="card-body">
				<form action="../Config/data.php" method="POST">
					<label>Nama Paket Perawatan :</label><br>
					<input type="hidden" name="idk" value="<?=$data_paket['id_paket'];?>">
					<input class="form-control" type="text" name="nama_paket" value="<?=$data_paket['nama_paket'];?>" disabled>				
					<input type="hidden" name="idu" value="<?=$data_user['id_user'];?>">
					<br>
					<label>Nama Customer :</label>
					<input class="form-control" type="text" name="nama_customer" value="<?=$data_user['nama_user'];?>" disabled><br>
					<label>Email : </label>
					<input class="form-control" type="text" name="email" value="<?=$data_user['email'];?>"><br>	
					<label>Pilih Jam Perawatan :</label> <span style="color:rgba(0,0,0,0.6);">
						<select class="form-control" name="waktu_pilih" id="foo">
						<option value="0">-- Pilih Jam Perawatan Hari Ini --</option>
						<option value="09.00 WIB">09.00 WIB</option>
						<option value="11.00 WIB">11.00 WIB</option>
						<option value="13.00 WIB">13.00 WIB</option>
						<option value="15.00 WIB">15.00 WIB</option>
						<option value="17.00 WIB">17.00 WIB</option>
						<option value="19.00 WIB">19.00 WIB</option>
						</select>
					</span>
					<label><br>Pilih Metode Pembayaran :</label> <span style="color:rgba(0,0,0,0.6);"> 
						<select class="form-control" name="metode_bayar" id="foo">
						<option value="0">-- Pilih Pembayaran --</option>
						<option value="BRI">Bank BRI</option>
						<option value="BNI">Bank BNI</option>
					</span>
					</select>
					</span>
					<label><br>Keterangan Tambahan :</label>
					<textarea class="form-control" name="keterangan_tambahan" style="height: 75px"></textarea><br>
					<input class="btn btn-primary" type="submit" name="input_pesanan" value="Pesan" style="background-color: #244065">
				</form>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="width: 100%;max-width: 500px;padding: 15px;margin: auto;" >
	    <div class="card" style="margin-top: 7%;">
	    	<div class="text-center card-header" style="background-color: #9DA0A7">
				<h3 align="center"> Metode Pembayaran </h3> 
			</div>
			<div class="card-body" style="padding:15px;margin: auto">
				<h6> Bank BRI : no.rekening 4001-01-010203-01-1 a/n Fina</h6>
				<h6> Bank BNI : no.rekening 0102030405 a/n Atun</h6>
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
  	<script src="../Assets/js/jquery.js"></script> 
	<script src="../Assets/js/popper.js"></script>
	<script src="../Assets/js/bootstrap.js"></script>
</body>
</html>
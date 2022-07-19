<?php
include "../Config/koneksi.php";
session_start();
if(!$_SESSION['id_user']){$log= "LogIn.php";$log1= "Log In";}else{$log= "LogOut.php";$log1= "Log Out";}	
if(!$_SESSION['login']){
	echo '<script>alert("anda harus login dulu");window.open("LogIn.php","_self")</script>';
}
#$id=$_GET['id'];
$query_paket = mysqli_query($con,"SELECT * FROM data_paket WHERE status_paket='1' ORDER BY nama_paket ASC");
$data_paket = mysqli_fetch_assoc($query_paket);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ulasan Paket Perawatan</title>
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
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<nav class="navbar site-header" style="margin-bottom: 20px;box-shadow: 0 0 10px 0 rgba(0,0,0,1) !important;">
		<div class="container">
			<a class="" href="../">
			      <img src="../Assets/img/LOGO.jpeg" width="120px" height="80px">
			</a>
			<div class="" style="float: right;">
				<a id="pesanan" class="" href="paket.php">Paket Kecantikan</a>
       	        <a class="px-3" href="pesanan.php?id_user=<?=$_SESSION['id_user'];?>&id_paket=0">Pemesanan</a>
			    <a class="px-3" href="keuangan.php">Konfirmasi Pembayaran</a>
			    <a class="px-3" href="SignUp.php">Pendaftaran</a>
			    <a class="px-3" href="ulasan.php?id=<?$_SESSION['id_user']?>">Ulasan</a>
			    <a class="px-3" href="AboutUs.php">About Us</a>
			    <a class="py-2 d-md-inline-block" href="<?=$log?>" style="border:1px solid white;border-radius: 8px;padding: 5px;margin-left: 20px"><?=$log1?></a>   	
			</div>
		</div>
	</nav>
		
	</div>
<div class="container-fluid" style="width: 100%;max-width: 500px;padding: 15px;margin: auto;" >
	    <div class="card" style="margin-top: 7%; background-color: #F0F1EC">
	    	<div class="text-center card-header" style="background-color: #9DA0A7">
	        	<h2>Ulasan</h2>
	    	</div>
	      	<div class="card-body">
				<form action="../Config/data.php" method="POST">
					<label>Nama Customer :</label>
					<input class="form-control" type="text" name="nama_pengirim" placeholder="Masukkan Nama"><br>
					<label>Nama Paket Perawatan :</label> <span style="color:rgba(0,0,0,0.6);">
						<select class="form-control" name="nama_paket" id="foo">
						<?php do{?>
						<option name="nama_paket" value="<?=$data_paket['nama_paket'];?>"><?=$data_paket['nama_paket']?></option>
						<?php }while($data_paket = mysqli_fetch_assoc($query_paket));?>
					</span>
					</select>
					</span>
					<label><br>Isi Ulasan :</label>
					<textarea class="form-control" name="isi_ulasan" style="height: 150px"></textarea><br>
					<input class="btn" type="submit" name="tambah_ulasan" value="Submit" style="background-color: #244065; color: white">
					<input type="hidden" name="parent_id_ulasan" id="parent_id_ulasan" value="0">
				</form>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="width: 100%;max-width: 900px;padding: 25px;margin: auto;" >
		<h4 class="mb-3">Ulasan :</h4>
		<?php
		include '../Config/koneksi.php';
		$query_ulasan =mysqli_query($con,"SELECT * FROM ulasan");
		while($data_ulasan=mysqli_fetch_assoc($query_ulasan)) { ?>

		<div class="card mb-3">
		  <div class="card-header">
		    <div class="col-md-6"><?= $data_ulasan['nama_pengirim']; ?></div>
		    <div class="col-md-5"><?= $data_ulasan['tanggal']; ?></div>
		  </div>
		  <div class="card-body">
		    <h5 class="card-title"><?= $data_ulasan['nama_paket']; ?></h5>
		    <p class="card-text"><?= $data_ulasan['isi_ulasan']; ?></p>
		    <a href="#" class="btn float-right" style="background-color: #244065; color: white">Reply</a>
		  </div>
		</div>
		<?php }; ?>
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
<script>
	/*var rating = -1, uID = 0;
	$(document).ready(function(){
		if(localStorage.getItem('rating')!=null)
			setStar(parseInt(localStorage.getItem('rating')))
		$('.fa-star').on('click', function(){
			rating=parseInt($(this).data('index'));
			localStorage.setItem('rating',rating);
			saveToTheDB();
		}
		function saveToTheDB(){
			$.ajax({
				url : "ulasan.php",
				method : "POST",
				dataType :'json'
				data:{
					save: 1,
					uID= uID,
					rating : rating
				}, success : function (r){
					uID = r.uid;
				}
				)
			}
		}*/
	/*$(document).ready(function(){
		$('#form_ulasan').on('submit', function(event){
			event.preventDefault();
			var form_data = $(this).serialize();
			$.ajax({
				url:"tambah_ulasan.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					$('#form_ulasan')[0].reset();
					$('#parent_id_ulasan').val('0');
					load_ulasan();
				}
			})
		});

		load_ulasan();

		function ulasan()
		{
			$.ajax({
				url:"tampil_ulasan.php",
				method:"POST",
				success:function(data)
				{
					$('#display_ulasan').html(data);
				}
			})
		}
		$(document).on('click', '.reply', function(){
			var ulasan_id = $(this).attr("id_user");
			$('#parent_id_ulasan').val(ulasan_id);
			$('#nama_pengirim').focus();
		});
	});

</script>
</body>
</html>


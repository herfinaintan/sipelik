<?php
error_reporting(0);
include "../../config/koneksi.php";
session_start();
if(!$_SESSION['id_user']){$log= "../LogIn.php";$log1= "Log In";}else{$log= "../LogOut.php";$log1= "Log Out";}
if(!$_SESSION['login']){
	echo '<script>alert("anda harus login dulu");window.open("../LogIn.php","_self")</script>';
}
$id=$_GET['id'];
$query_user = mysqli_query($con,"SELECT * FROM user WHERE id_user='$id' ");
#$query_keuangan =mysqli_query($con,"SELECT * FROM keuangan JOIN data_kosan ON keuangan.id_kosan=data_kosan.id_kosan JOIN user ON keuangan.id_user=user.id_user WHERE keuangan.id_user='$id' AND status_keuangan='1' ORDER BY id_keuangan ASC");
$query_kosan = mysqli_query($con,"SELECT * FROM data_kosan WHERE status_kosan='1' ORDER BY nama_kosan ASC");
$data_user = mysqli_fetch_assoc($query_user);
$data_keuangan = mysqli_fetch_assoc($query_keuangan);
$data_kosan = mysqli_fetch_assoc($query_kosan);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Forum Answer Question</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="icon" type="images" href="../../Assets/img/1575990456132.png">
	<link href="../../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../../Assets/css/Style.css">
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

	</style>
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<nav class="navbar site-header" style="margin-bottom: 20px;box-shadow: 0 0 10px 0 rgba(0,0,0,1) !important;">
		<div class="container">
			<a class="" href="../../">
			      <img src="../../Assets/img/1575990470367.png" width="120px" height="60px">
			</a>
			<div class="" style="float: right;">
				<a id="pesanan" class="" href="../kosan.php">Info Kost</a>
				<a class="px-3" href="../pesanan.php?idu=<?=$_SESSION['id_user'];?>&idk=0">Pemesanan</a>
				<a class="px-3" href="../keuangan.php">Transaksi</a>
				<a class="px-3" href="../SignUp.php">Pendaftaran</a>
				<a class="px-3" href="index.php?id<?=$data_user['id_user']?>">FAQ</a>
				<a class="px-3" href="../AboutUs.php">About Us</a>
				<a class="py-2 d-md-inline-block" href="<?=$log?>" style="border:1px solid white;border-radius: 8px;padding: 5px;margin-left: 20px"><?=$log1?></a>			
			</div>
		</div>
	</nav>
		
	</div>
<div class="container mb-3">
	<h2 align="center" style="margin: 60px 10px 10px 10px;">B-Kost</h2><hr>
	<form method="POST" id="form_komen">
		<div class="form-group">
			<input type="hidden" name="idu" value="<?=$id;?>">
			<input type="text" name="nama_pengirim" id="nama_pengirim" class="form-control" placeholder="Masukkan Nama" value="<?=$data_user['nama_user'];?>" />
		
		</div>
		<div class="form-group">
			<select name="nama_kosan" class="form-control" >
				<?php do{?>
				<option value="<?=$data_kosan['id_kosan'];?>"><?=$data_kosan['nama_kosan']?></option>
			<?php }while($data_kosan = mysqli_fetch_assoc($query_kosan));?>
			</select>
		</div>
		<div class="form-group">
			<textarea name="isi_ulasan" id="isi_ulasan" class="form-control" placeholder="Tulis Komentar" rows="5"></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="parent_id_ulasan" id="parent_id_ulasan" value="0" />
			<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
		</div>
	</form>
	<hr>
	<h4 class="mb-3">Komentar :</h4>
	<span id="message"></span>
   
   	<div id="display_comment"></div>
</div>

<div class="footer" style="width:100%;float: left;">
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

<script>
	$(document).ready(function(){
		$('#form_komen').on('submit', function(event){
			event.preventDefault();
			var form_data = $(this).serialize();
			$.ajax({
				url:"tambah_ulasan.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					$('#form_komen')[0].reset();
					$('#parent_id_ulasan').val('0');
					load_comment();
				}
			})
		});

		load_comment();

		function load_comment()
		{
			$.ajax({
				url:"tampil_ulasan.php",
				method:"POST",
				success:function(data)
				{
					$('#display_comment').html(data);
				}
			})
		}
		$(document).on('click', '.reply', function(){
			var komentar_id = $(this).attr("id");
			$('#parent_id_ulasan').val(komentar_id);
			$('#nama_pengirim').focus();
		});
	});

</script>
</body>
</html>


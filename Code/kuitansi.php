<?php
	session_start();
	include "../Config/koneksi.php";
	$idk=$_GET['idk'];
	$query_keuangan=mysqli_query($con,"SELECT * FROM keuangan JOIN data_kosan ON keuangan.id_kosan=data_kosan.id_kosan JOIN user ON keuangan.id_user=user.id_user JOIN pesanan ON keuangan.id_pesanan=pesanan.id_pesanan WHERE keuangan.id_user='$_SESSION[id_user]' AND status_keuangan='1'");
	$query_kosan=mysqli_query($con, "SELECT * FROM data_kosan JOIN user ON data_kosan.id_user=user.id_user WHERE id_kosan='$idk'");
	$data_keuangan=mysqli_fetch_assoc($query_keuangan);
	$data_kosan=mysqli_fetch_assoc($query_kosan);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kuitansi</title>
	<link rel="icon" type="images" href="../Assets/img/1575990456132.png">
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../assets/css/Style.css">
	<link rel="stylesheet" type="text/css" href="../Assets/css/font-awesome.css">
</head>
<body>
	<center>
	<div class="card card-header" style="width:50%">
		Kuitansi
	</div>
	<div class="card card-body" style="width:50%">
		<table border="1">
			<tr>
				<td>ID :</td>
				<td><?=$data_keuangan['id_keuangan']?></td>
			</tr>
			<tr>
				<td>Nama :</td>
				<td><?=$data_keuangan['nama_user']?></td>
			</tr>
			<tr>
				<td>Nama Kosan :</td>
				<td><?=$data_keuangan['nama_kosan']?></td>
			</tr>
			<tr>
				<td>Jumlah Pembayaran</td>
				<td>Rp <?=$data_keuangan['uang_muka']?>,-</td>				
			</tr>
		</table>
		<p style="float: right">Purbalinnga</p>
		<p><?=$data_kosan['nama_user']?></p>
	</div>
</center>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>

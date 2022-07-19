<?php
	include "header.php";
	$id = $_GET['id'];
	$query_kosan=mysqli_query($con, "SELECT * FROM user JOIN data_kosan ON user.id_user=data_kosan.id_user WHERE id_kosan ='$id'");
	$query_kosan1=mysqli_query($con, "SELECT * FROM data_kosan WHERE id_kosan ='$id' ORDER BY id_kosan ASC");
	$data_kosan=mysqli_fetch_assoc($query_kosan);
	$data_kosan1=mysqli_fetch_assoc($query_kosan1);
?>

<form action="../Config/data.php" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="id_kosan" value="<?=$data_kosan['id_kosan']?>">
	<table>
		<tr>
			<td>Nama Kosan:</td>
			<td><input type="text" name="nama_kosan" value="<?=$data_kosan['nama_kosan'];?>"></td>
		</tr>
		<tr>
			<td>Alamat Kosan:</td>
			<td><input type="text" name="alamat_kosan" value="<?=$data_kosan['alamat_kosan'];?>"></td>
		</tr>
		<tr>
			<td>Tipe Kosan:</td>
			<td>
				<input type="radio" name="tipe_kosan" value="Perempuan">Perempuan
				<input type="radio" name="tipe_kosan" value="Laki-laki">Laki-laki
				<input type="radio" name="tipe_kosan" value="Campuran">Campuran
			</td>
		</tr>
		<tr>
			<td>Jumlah Kamar:</td>
			<td><input type="text" name="jumlah_kamar" value="<?=$data_kosan['jumlah_kamar'];?>"></td>
		</tr>
		<tr>
			<td>Jumlah Kamar Terhuni:</td>
			<td><input type="text" name="sudah_diisi" value="<?=$data_kosan['sudah_diisi'];?>"></td>
		</tr>
		<tr>
			<td>Fasilitas:</td>
			<td><textarea name="fasilitas" style="height: 100px; width: 200px;"><?=$data_kosan['fasilitas'];?></textarea></td>
		</tr>
		<tr>
			<td>Deskripsi:</td>
			<td><textarea name="deskripsi" style="height: 100px; width: 200px;"><?=$data_kosan['deskripsi'];?></textarea></td>
		</tr>
		<tr>
			<td>Harga Kosan:</td>
			<td><input type="text" name="harga_total" value="<?=$data_kosan['harga_total'];?>"></td>
		</tr>
		<tr>
			<td>Gambar:</td>
			<td><input type="file" name="gambar"></td>
		</tr>
		<tr>
			<td><input type="submit" name="simpan_kosan" value="Simpan"></td>
			<td><input type="reset" name="reset" value="Isi Ulang"></td>
		</tr>
	</table>
</form>
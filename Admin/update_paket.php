<?php
	include "header.php";
	$id=$_GET['id'];
	$query_paket=mysqli_query($con,"SELECT * FROM data_paket WHERE id_paket='$id'");
	$data_paket=mysqli_fetch_assoc($query_paket);
?>

<table class="table table-striped table-bordered table-hover">
    <form action="../Config/data.php" method="POST">
        <h2>Input Data Paket Perawatan</h2>
        <tr>
            <td>Nama Paket Perawatan</td>
            <input type="hidden" name="id_paket" value="<?=$data_paket['id_paket'];?>">
            <td><input type="text" name="nama_paket" style="width:350px" value="<?=$data_paket['nama_paket'];?>" required></td>
        </tr>
        <tr>
            <td>Jenis Paket Perawatan</td>
            <td><input type="text" name="jenis_paket" style="width:350px" value="<?=$data_paket['jenis_paket'];?>" required></td>
        </tr>
        <tr>
            <td>Deskripsi Paket Perawatan</td>
            <td><textarea name="keterangan" style="width:400px; height:70px" required><?=$data_paket['keterangan'];?></textarea></td>
        </tr>
        <tr>
            <td>Harga Paket Perawatan</td>
            <td><input type="text" name="harga_total" style="width:300px" value="<?=$data_paket['harga_total'];?>" required></td>
        </tr>
        <tr>
            <td>Gambar Paket Perawatan</td>
            <td><input type="file" name="gambar" required></td>
        </tr>
        <tr>
            <td>Jumlah Tersedia</td>
            <td><input type="text" name="jumlah_tersedia" style="width:200px" value="<?=$data_paket['jumlah_tersedia'];?>" required></td>
        </tr>
        <tr>
            <td colspan="2"><input type="hidden" name="level" value="admin"><input type="submit" name="update_paket" value="simpan"></td>
        </tr>
    </form>
</table>  

<?php
	include "footer.php";
?>
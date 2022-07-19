<?php
	include "header.php";
	$id=$_GET['id'];
	$query_kosan=mysqli_query($con,"SELECT * FROM data_kosan WHERE id_kosan='$id'");
	$data_kosan=mysqli_fetch_assoc($query_kosan);
?>

<table class="table table-striped table-bordered table-hover">
    <form action="../Config/data.php" method="POST">
        <h2>Input Data Kosan</h2>
        <tr>
            <td>Nama Kosan</td>
            <td><input type="text" name="nama_kosan" style="width:350px" value="<?=$data_kosan['nama_kosan'];?>" required></td>
        </tr>
        <tr>
            <td>Alamat Kosan</td>
            <td><textarea name="alamat_kosan" value="alamat" style="width:400px; height:70px" required><?=$data_kosan['alamat_kosan'];?></textarea></td>
        </tr>
        <tr>
            <td>Tipe Kosan</td>
            <td><input type="radio" name="tipe_kosan" value="Laki-Laki"> Laki-Laki<br>
            <input type="radio" name="tipe_kosan" value="Perempuan"> Perempuan<br>
            <input type="radio" name="tipe_kosan" value="Campuran"> Campuran</td>
        </tr>
        <tr>
            <td>Jumlah Kamar</td>
            <td><input type="text" name="jumlah_kamar" style="width:200px" value="<?=$data_kosan['jumlah_kamar'];?>" required></td>
        </tr>
        <tr>
            <td>Jumlah kamar terisi</td>
            <td><input type="text" name="sudah_diisi" style="width:200px" value="<?=$data_kosan['sudah_diisi'];?>" required></td>
        </tr>
        <tr>
            <td>Fasilitas</td>
            <td><textarea name="fasilitas" style="width:400px; height:70px" required><?=$data_kosan['fasilitas'];?></textarea></td>
        </tr>
        <tr>
            <td>Deskripsi Kosan</td>
            <td><textarea name="deskripsi" style="width:400px; height:70px" required><?=$data_kosan['deskripsi'];?></textarea></td>
        </tr>
        <tr>
            <td>Harga Kosan</td>
            <td><input type="text" name="harga_total" style="width:300px" value="<?=$data_kosan['harga_total'];?>" required></td>
        </tr>
        <tr>
            <td>Gambar Kosan</td>
            <td><input type="file" name="gambar" required></td>
        </tr>
        <tr>
            <td>Peta Kosan</td>
            <td><textarea name="peta_kosan"style="width:400px; height:70px" required><?=$data_kosan['peta_kosan'];?></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="hidden" name="level" value="admin"><input type="submit" name="simpan_user" value="simpan"></td>
        </tr>
    </form>
</table>  

<?php
	include "footer.php";
?>
<?php
	include "header.php";
	$query_kosan=mysqli_query($con, "SELECT * FROM user JOIN data_kosan ON user.id_user=data_kosan.id_user WHERE data_kosan.id_user=$_SESSION[id_user] ORDER BY id_kosan ASC");
    $query_kosan1=mysqli_query($con, "SELECT * FROM user JOIN data_kosan ON user.id_user=data_kosan.id_user WHERE status_kosan='0' ORDER BY id_kosan ASC");
    $data_kosan=mysqli_fetch_assoc($query_kosan);
    $data_kosan1=mysqli_fetch_assoc($query_kosan1);
?>
<table class="table table-striped table-bordered table-hover">
    <form action="../Config/data.php" method="POST">
        <h2>Input Data Kosan</h2>
        <tr>
            <td>Nama Kosan</td>
            <td><input type="text" name="nama_kosan" style="width:350px"  required></td>
        </tr>
        <tr>
            <td>Alamat Kosan</td>
            <td><textarea name="alamat_kosan" value="alamat" style="width:400px; height:70px" required></textarea></td>
        </tr>
        <tr>
            <td>Tipe Kosan</td>
            <td><input type="radio" name="tipe_kosan" value="Laki-Laki"> Laki-Laki<br>
            <input type="radio" name="tipe_kosan" value="Perempuan"> Perempuan<br>
            <input type="radio" name="tipe_kosan" value="Campuran"> Campuran</td>
        </tr>
        <tr>
            <td>Jumlah Kamar</td>
            <td><input type="text" name="jumlah_kamar" style="width:200px"  required></td>
        </tr>
        <tr>
            <td>Jumlah kamar terisi</td>
            <td><input type="text" name="sudah_diisi" style="width:200px"  required></td>
        </tr>
        <tr>
            <td>Fasilitas</td>
            <td><textarea name="fasilitas" style="width:400px; height:70px" required></textarea></td>
        </tr>
        <tr>
            <td>Deskripsi Kosan</td>
            <td><textarea name="deskripsi" style="width:400px; height:70px" required></textarea></td>
        </tr>
        <tr>
            <td>Harga Kosan</td>
            <td><input type="text" name="harga_total" style="width:300px"  required></td>
        </tr>
        <tr>
            <td>Gambar Kosan</td>
            <td><input type="file" name="gambar" required></td>
        </tr>
        <tr>
            <td>Peta Kosan</td>
            <td><textarea name="peta_kosan"style="width:400px; height:70px" required></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="hidden" name="level" value="admin"><input type="submit" name="input_user" value="Input"></td>
        </tr>
    </form>
</table>  
<div class="card">
    <div class="table-responsive">
        <div class="card-header">
            Table Data Kosan
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <thead >
                    <tr>
                        <th>No.</th>
                        <th>Nama Kosan</th>
                        <th>Alamat Kosan</th>
                        <th>Pemilik Kosan</th>
                        <th>Tipe Kosan</th>
                        <th>Jumlah Kamar</th>
                        <th>Sisa Kamar</th>
                        <th>Fasilitas</th>
                        <th>Deskripsi</th>
                        <td>Harga Kosan</th>
                        <th>Gambar Kosan</th>
                        <th>Peta Kosan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $num=0; $sisa=0; do{$num++; 
                    $sisa=$data_kosan['jumlah_kamar']-$data_kosan['sudah_diisi'];?>
                    <tr>
                        <td><?=$num;?></td>
                        <td><?=$data_kosan['nama_kosan'];?></td>
                        <td><?=$data_kosan['alamat_kosan'];?></td>
                        <td><?=$data_kosan['nama_user'];?></td>
                        <td><?=$data_kosan['tipe_kosan'];?></td>
                        <td><?=$data_kosan['jumlah_kamar'];?> Kamar</td>
                        <td><?=$sisa?> Kamar</td>
                        <td><?php echo substr($data_kosan['fasilitas'], 0,50)."...";?></td>
                        <td><?php echo substr($data_kosan['deskripsi'], 0,50)."...";?></td>
                        <td><?=$data_kosan['harga_total'];?></td>
                        <td><img src="../Upload/<?=$data_kosan['gambar_kosan'];?>" style="width: 100px"></td>
                        <td><?php if(!empty($data_kosan['peta_kosan'])) echo "Sudah ada peta";else{echo "Belum ada peta";}?></td>
                        <td>
                            <a href="../Code/kosan-data.php?kosan=<?=$data_kosan['id_kosan'];?>">Lihat</a> | 
                            <a href="update_kosan.php?id=<?=$data_kosan['id_kosan'];?>">Edit</a> | 
                            <a href="delete_kosan.php?id=<?=$data_kosan['id_kosan'];?>" onclick="return confirm('Yakin ingin menghapus?');">Delete</a>
                        </td>
                    </tr>
                  <?php }while($data_kosan=mysqli_fetch_assoc($query_kosan));?>   
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
    include "footer.php";
?>
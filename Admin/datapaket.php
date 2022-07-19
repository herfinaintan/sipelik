<?php
    include "header.php";
    $query_paket=mysqli_query($con, "SELECT * FROM data_paket WHERE status_paket='1' ORDER BY id_paket ASC");
    $data_paket=mysqli_fetch_assoc($query_paket);
?>
<table class="table table-striped table-bordered table-hover">
    <form action="../Config/data.php" method="POST">
        <h2>Input Data Paket Perawatan</h2>
        <tr>
            <td>Nama Paket Perawatan</td>
            <td><input type="text" name="nama_paket" style="width:350px"  required></td>
        </tr>
        <tr>
            <td>Jenis Paket Perawatan</td>
            <td><input type="text" name="jenis_paket" style="width:350px"  required></td>
        </tr>
        <tr>
            <td>Deskripsi Paket Perawatan</td>
            <td><textarea name="keterangan" style="width:400px; height:70px" required></textarea></td>
        </tr>
        <tr>
            <td>Harga Paket Perawatan</td>
            <td><input type="text" name="harga_total" style="width:300px"  required></td>
        </tr>
        <tr>
            <td>Gambar Paket Perawatan</td>
            <td><input type="file" name="gambar" required></td>
        </tr>
        <tr>
            <td>Jumlah Tersedia</td>
            <td><input type="text" name="jumlah_tersedia" style="width:200px"  required></td>
        </tr>
        <tr>
            <td colspan="2"><input type="hidden" name="level" value="admin"><input type="submit" name="input_paket" value="Input" style="background-color: #B22222; color:white "></td>
        </tr>
    </form>
</table>  
<div class="card">
    <div class="table-responsive">
        <div class="card-header">
            Table Data Paket Perawatan
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <thead >
                    <tr>
                        <th>No.</th>
                        <th>Nama Paket Perawatan</th>
                        <th>Jenis Paket Perawatan</th>
                        <th>Deskripsi</th>
                        <th>Harga Paket</th>
                        <th>Gambar Paket</th>
                        <th>Jumlah Tersedia</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $num=0; $sisa=0; do{$num++; 
                   # $sisa=$data_paket['jumlah_tersedia']-$data_paket['sudah_diisi'];?>
                    <tr>
                        <td><?=$num;?></td>
                        <td><?=$data_paket['nama_paket'];?></td>
                        <td><?=$data_paket['jenis_paket'];?></td>
                        <td><?php echo substr($data_paket['keterangan'], 0,50)."...";?></td>
                        <td><?=$data_paket['harga_total'];?></td>
                        <td><img src="../Upload/<?=$data_paket['gambar_paket'];?>" style="width: 100px"></td>
                        <td><?=$data_paket['jumlah_tersedia'];?></td>
                        <td>
                            <a href="../Code/paket-data.php?paket=<?=$data_paket['id_paket'];?>">Lihat</a> | 
                            <a href="update_paket.php?id=<?=$data_paket['id_paket'];?>">Edit</a> | 
                            <a href="delete_paket.php?id=<?=$data_paket['id_paket'];?>" onclick="return confirm('Yakin ingin menghapus?');">Delete</a>
                        </td>
                    </tr>
                  <?php }while($data_paket=mysqli_fetch_assoc($query_paket));?>   
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
    include "footer.php";
?>
<?php
    include "header.php";
    $query_paket=mysqli_query($con, "SELECT * FROM data_paket WHERE status_paket='1' ORDER BY id_paket ASC");
    $data_paket=mysqli_fetch_assoc($query_paket);
?>

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
                        <th>Jumlah Tersedia</th>
                        <th>Gambar Paket</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $num=0; $sisa=0; do{$num++;?>
                    <tr>
                        <td><?=$num;?></td>
                        <td><?=$data_paket['nama_paket'];?></td>
                        <td><?=$data_paket['jenis_paket'];?></td>
                        <td><?php echo substr($data_paket['keterangan'], 0,50)."...";?></td>
                        <td><?=$data_paket['harga_total'];?></td>
                        <td><?=$data_paket['jumlah_tersedia'];?></td>
                        <td><img src="../Upload/<?=$data_paket['gambar_paket'];?>" style="width: 100px"></td>
                        <td>
                            <a href="../Code/paket-data.php?paket=<?=$data_paket['id_paket'];?>">Lihat</a>  
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
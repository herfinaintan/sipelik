<?php
	include "header.php";
  $query_pesanan=mysqli_query($con,"SELECT * FROM pesanan JOIN user ON pesanan.id_user=user.id_user JOIN data_kosan ON pesanan.id_kosan=data_kosan.id_kosan ORDER BY id_pesanan ASC");
  $data_pesanan=mysqli_fetch_assoc($query_pesanan);
?>

<button> <a href="lapuser.php" class="btn-primary btn">Laporan User</a></button>
<button> <a href="lapdatakosan.php" class="btn-primary btn">Laporan Data Kosan</a></button>
<button> <a href="lappemesanan.php" class="btn-primary btn">Laporan Pemesanan</a></button>
<button> <a href="lapkeuangan.php" class="btn-primary btn">Laporan Keuangan</a></button>

  <div>
    <br>
    LAPORAN PEMESANAN    
  </div>


  <!-- DIBAWAH INI CONTOH TABEL LAPORAN PEMESANAN, NANTI TINGGAL DIMASUKIN KE DATA BASE SAMA BACK END -->

<div class="card">
    <div class="table-responsive">
        <div class="card-header">
            Table Pemesanan
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID Pesanan</th>
                        <th>Nama User</th>
                        <th>Email </th>
                        <th>ID Kosan</th>
                        <th>Nama Kosan</th>
                        <th>Harga Kosan</th>
                        <th>Uang Muka</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php $num=0; do{$num++;?>
                        <td><?=$num++;?></td>
                        <td><?=$data_pesanan['nama_user'];?></td>
                        <td><?=$data_pesanan['email'];?></td>
                        <td><?=$data_pesanan['id_kosan'];?></td>
                        <td><?=$data_pesanan['nama_kosan'];?></td>
                        <td><?=$data_pesanan['harga_total'];?></td>
                        <td><?php if($data_pesanan['harga_total']==$data_pesanan['uang_muka'])
                                echo 0;else{echo $data_pesanan['uang_muka'];}
                            ?>
                            
                        </td>
                        <td>
                            <?php if($data_pesanan['harga_total']>$data_pesanan['uang_muka']){
                                $sisa=$data_pesanan['harga_total']-$data_pesanan['uang_muka'];
                                echo "Kurang ".$sisa;}else
                                if($data_pesanan['harga_total']==$data_pesanan['uang_muka']){
                                    echo "Lunas";
                                }
                            ?>
                        </td>
                    </tr><?php }while($data_pesanan=mysqli_fetch_assoc($query_pesanan)); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
	include "footer.php";
?>
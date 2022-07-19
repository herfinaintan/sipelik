<?php
	include "header.php";
  $query_keuangan=mysqli_query($con,"SELECT * FROM keuangan JOIN pesanan ON keuangan.id_pesanan=pesanan.id_pesanan JOIN data_kosan ON keuangan.id_kosan=data_kosan.id_kosan JOIN user ON keuangan.id_user=user.id_user ORDER BY id_keuangan ASC");
    $data_keuangan=mysqli_fetch_assoc($query_keuangan);  
?>

<button> <a href="lapuser.php" class="btn-primary btn">Laporan User</a></button>
<button> <a href="lapdatakosan.php" class="btn-primary btn">Laporan Data Kosan</a></button>
<button> <a href="lappemesanan.php" class="btn-primary btn">Laporan Pemesanan</a></button>
<button> <a href="lapkeuangan.php" class="btn-primary btn">Laporan Keuangan</a></button>

  <div>
    <br>
    LAPORAN KEUANGAN    
  </div>
  
<!-- DIBAWAH INI CONTOH TABEL LAPORAN KEUANGAN, NANTI TINGGAL DIMASUKIN KE DATA BASE SAMA BACK END -->


<div class="card">
    <div class="table-responsive">
        <div class="card-header">
            Table Keuangan
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kosan</th>
                        <th>Harga Kosan </th>
                        <th>Nama User</th>
                        <th>Sisa Tagihan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr> <?php $num=0; do{$num++ ?>
                        <td><?=$num;?></td>
                        <td><?=$data_keuangan['nama_kosan'];?></td>
                        <td><?=$data_keuangan['harga_total'];?></td>
                        <td><?=$data_keuangan['nama_user'];?></td>
                        <td><?php echo $data_keuangan['harga_total']-$data_keuangan['uang_muka'];?></td>
                    </tr><?php }while($data_keuangan=mysqli_fetch_assoc($query_keuangan));?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
	include "footer.php";
?>
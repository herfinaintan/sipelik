<?php
	include "header.php";
  $query_kosan=mysqli_query($con, "SELECT * FROM user JOIN data_kosan ON user.id_user=data_kosan.id_user ORDER BY id_kosan ASC");
  $data_kosan=mysqli_fetch_assoc($query_kosan);
?>

<button> <a href="lapuser.php" class="btn-primary btn">Laporan User</a></button>
<button> <a href="lapdatakosan.php" class="btn-primary btn">Laporan Data Kosan</a></button>
<button> <a href="lappemesanan.php" class="btn-primary btn">Laporan Pemesanan</a></button>
<button> <a href="lapkeuangan.php" class="btn-primary btn">Laporan Keuangan</a></button>

  <div>
    <br>
    LAPORAN DATA KOSAN    
  </div>


<!-- DIBAWAH INI CONTOH TABEL LAPORAN DATA KOSAN, NANTI TINGGAL DIMASUKIN KE DATA BASE SAMA BACK END -->


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Tabel Data Kosan
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead >
              <tr>
                <th>No.</th>
                <th>Nama Kosan</th>
                <th>Alamat Kosan</th>
                <th>Pemilik Kosan</th>
                <th>Tipe Kosan</th>
                <tH>Jumlah Kamar</th>
                <th>Sisa Kamar</th>
                <th>Fasilitas</th>
                <th>Deskripsi</th>
                <td>Harga Kosan</th>
                <th>Gambar Kosan</th>
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
                <td>
                  <a href="../Code/kosan-data.php?Kosan=<?=$data_kosan['id_kosan'];?>">Lihat</a> | 
                  <a href="edit_kosan.php?id=<?=$data_kosan['id_kosan'];?>">Edit</a> | 
                  <a href="hapus_kosan.php?id=<?=$data_kosan['id_kosan'];?>">Delete</a>
                </td>
              </tr>
              <?php }while($data_kosan=mysqli_fetch_assoc($query_kosan));?> 
            </tbody>
                    </table>
                </div>              
            </div>
        </div>
    </div>
<?php
	include "footer.php";
?>
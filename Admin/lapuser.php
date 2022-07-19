<?php
	include "header.php";
  $query_user=mysqli_query($con,"SELECT * FROM user ORDER BY nama_user ASC");
  $data_user=mysqli_fetch_assoc($query_user);
?>

<button> <a href="lapuser.php" class="btn-primary btn">Laporan User</a></button>
<button> <a href="lapdatakosan.php" class="btn-primary btn">Laporan Data Kosan</a></button>
<button> <a href="lappemesanan.php" class="btn-primary btn">Laporan Pemesanan</a></button>
<button> <a href="lapkeuangan.php" class="btn-primary btn">Laporan Keuangan</a></button>



  <div>
    <br>
    LAPORAN USER    
  </div>


<!-- DIBAWAH INI CONTOH TABEL LAPORAN USER, NANTI TINGGAL DIMASUKIN KE DATA BASE SAMA BACK END -->

<div class="card">
    <div class="table-responsive">
        <div class="card-header">
            Table Data User
        </div>
        <div class="card-body">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama User</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nomor HP</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
                <tbody> <?php $num=0; do{ $num++?>
                    <tr>
                        <td><?=$num;?></td>
                        <td><?=$data_user['nama_user'];?></td>
                        <td><?=$data_user['alamat'];?></td>
                        <td><?=$data_user['email'];?></td>
                        <td><?=$data_user['username'];?></td>
                        <td><?=$data_user['password'];?></td>
                        <td><?=$data_user['no_hp'];?></td>
                        <td><?=$data_user['level'];?></td>
                        <td> <a href="update.php?id=<?=$data_user['id_user'];?>">Update</a> | 
                            <a href="hapus.php?id=<?=$data_user['id_user'];?>">Delete</a>
                        </td>
                    </tr><?php }while($data_user=mysqli_fetch_assoc($query_user));?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
<?php
	include "footer.php";
?>
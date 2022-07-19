<?php
    include "header.php";
    $query=mysqli_query($con,"SELECT * FROM pesanan ORDER BY id_pesanan ASC");
    $query_pesanan=mysqli_query($con,"SELECT * FROM pesanan JOIN data_paket ON pesanan.id_paket=data_paket.id_paket JOIN user ON pesanan.id_user=user.id_user ORDER BY id_pesanan ASC");
    $query_pesanan1=mysqli_query($con,"SELECT * FROM pesanan JOIN data_paket ON pesanan.id_paket=data_paket.id_paket JOIN user ON pesanan.id_user=user.id_user WHERE status_pesanan='0' ORDER BY id_pesanan ASC");
    $query_pesanan2=mysqli_query($con,"SELECT * FROM pesanan JOIN data_paket ON pesanan.id_paket=data_paket.id_paket JOIN user ON pesanan.id_user=user.id_user WHERE status_pesanan='0' ORDER BY id_pesanan ASC");
    $data=mysqli_fetch_assoc($query);
    $data_pesanan=mysqli_fetch_assoc($query_pesanan);
    $data_pesanan1=mysqli_fetch_assoc($query_pesanan1);
    $data_pesanan2=mysqli_fetch_assoc($query_pesanan2);
?>              
<div class="card">
    <div class="table-responsive">
        <div class="card-header">
            Semua Data Pemesanan
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID Pesanan</th>
                        <th>Nama User</th>
                        <th>Email </th>
                        <th>ID Paket</th>
                        <th>Nama Paket</th>
                        <th>Jam Perawatan</th>
                        <th>Metode Pembayaran</th>
                        <th>Keterangan Tambahan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php $num=0; do{$num++; if ($data['status_pesanan']==0) {
                        $status="Pending";
                    }else if ($data['status_pesanan']==1) {
                        $status="Diterima";
                    }else if ($data['status_pesanan']==2) {
                        $status="Ditolak";
                    } ?>
                        <td><?=$num++;?></td>
                        <td><?=$data_pesanan['nama_user'];?></td>
                        <td><?=$data_pesanan['email'];?></td>
                        <td><?=$data_pesanan['id_paket'];?></td>
                        <td><?=$data_pesanan['nama_paket'];?></td>
                        <td><?=$data_pesanan['waktu_pilih'];?></td>
                        <td><?=$data_pesanan['metode_bayar'];?></td>
                        <td><?=$data_pesanan['keterangan_tambahan'];?></td>
                        <td><?=$status?></td>
                        <?php $data=mysqli_fetch_assoc($query); ?>
                    </tr><?php }while($data_pesanan=mysqli_fetch_assoc($query_pesanan)); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card">
    <div class="table-responsive">
        <div class="card-header">
            Table Pemesanan Dikonfirmasi
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama User</th>
                        <th>Email </th>
                        <th>ID Paket</th>
                        <th>Nama Paket</th>
                        <th>Jam Perawatan</th>
                        <th>Metode Pembayaran</th>
                        <th>Keterangan Tambahan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php $num=0; do{$num++;?>
                        <td><?=$num++;?></td>
                        <td><?=$data_pesanan1['nama_user'];?></td>
                        <td><?=$data_pesanan1['email'];?></td>
                        <td><?=$data_pesanan1['id_paket'];?></td>
                        <td><?=$data_pesanan1['nama_paket'];?></td>
                        <td><?=$data_pesanan1['waktu_pilih'];?></td>
                        <td><?=$data_pesanan1['metode_bayar'];?></td>
                        <td><?=$data_pesanan1['keterangan_tambahan'];?></td>
                        <td><form action="../Config/data.php" method="POST"><input type="hidden" name="idp" value="<?=$data_pesanan1['id_pesanan']?>"><button type="submit" name="confirm_pesanan" class="btn btn-success" onclick="return confirm('Anda yakin menerima pesanan ?')"><i class="fa fa-check"></i></button><button type="submit" name="refuse_pesanan" class="btn btn-danger" onclick="return confirm('Anda yakin menolak pesanan ?')"><i class="fa fa-cross">X</i></button></form></td>
                    </tr><?php }while($data_pesanan1=mysqli_fetch_assoc($query_pesanan1)); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
     
<div class="card">
    <div class="table-responsive">
        <div class="card-header">
            Table Pemesanan Ditolak
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama User</th>
                        <th>Email </th>
                        <th>ID Paket</th>
                        <th>Nama Paket</th>
                        <th>Jam Perawatan</th>
                        <th>Metode Pembayaran</th>
                        <th>Keterangan Tambahan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   <tr><?php $num=0; do{$num++;?>
                        <td><?=$num++;?></td>
                        <td><?=$data_pesanan2['nama_user'];?></td>
                        <td><?=$data_pesanan2['email'];?></td>
                        <td><?=$data_pesanan2['id_paket'];?></td>
                        <td><?=$data_pesanan2['nama_paket'];?></td>
                        <td><?=$data_pesanan2['waktu_pilih'];?></td>
                        <td><?=$data_pesanan2['metode_bayar'];?></td>
                        <td><?=$data_pesanan2['keterangan_tambahan'];?></td>
                        <td><form action="../Config/data.php" method="POST"><input type="hidden" name="idp" value="<?=$data_pesanan2['id_pesanan']?>"><button type="submit" name="confirm_pesanan" class="btn btn-success" onclick="return confirm('Anda yakin menerima pesanan ?')"><i class="fa fa-check"></i></button><button type="submit" name="refuse_pesanan" class="btn btn-danger" onclick="return confirm('Anda yakin menolak pesanan ?')"><i class="fa fa-cross">X</i></button></form></td>
                    </tr><?php }while($data_pesanan2=mysqli_fetch_assoc($query_pesanan2)); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
    include "footer.php";
?>
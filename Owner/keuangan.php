<?php
    include "header.php";
    $query_keuangan=mysqli_query($con,"SELECT * FROM keuangan JOIN pesanan ON keuangan.id_pesanan=pesanan.id_pesanan JOIN data_paket ON keuangan.id_paket=data_paket.id_paket JOIN user ON keuangan.id_user=user.id_user WHERE status_pesanan='1' ORDER BY id_keuangan ASC");
   $query_keuangan1=mysqli_query($con,"SELECT * FROM keuangan JOIN pesanan ON keuangan.id_pesanan=pesanan.id_pesanan JOIN data_paket ON keuangan.id_paket=data_paket.id_paket JOIN user ON keuangan.id_user=user.id_user WHERE status_pesanan='1' AND status_keuangan='0' ORDER BY id_keuangan ASC");
    $query_keuangan2=mysqli_query($con,"SELECT * FROM keuangan JOIN pesanan ON keuangan.id_pesanan=pesanan.id_pesanan JOIN data_paket ON keuangan.id_paket=data_paket.id_paket JOIN user ON keuangan.id_user=user.id_user WHERE status_pesanan='1' AND status_keuangan='0' ORDER BY id_keuangan ASC");
    $data_keuangan=mysqli_fetch_assoc($query_keuangan);
    $data_keuangan1=mysqli_fetch_assoc($query_keuangan1);
    $data_keuangan2=mysqli_fetch_assoc($query_keuangan2);
?>              
<div class="card">
    <div class="table-responsive">
        <div class="card-header">
            Semua Data Keuangan
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Paket</th>
                        <th>Harga Paket </th>
                        <th>Nama User</th>
                        <th>Bukti Transfer</th>
                        <th>Jumlah Transfer</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr> <?php $num=0; do{$num++; if ($data_keuangan['status_keuangan']==0) {
                        $status="Pending";
                    }else if ($data_keuangan['status_keuangan']==1) {
                        $status="Diterima";
                    }else if ($data_keuangan['status_keuangan']==2){
                        $status="Ditolak";
                    } ?>

                        <td><?=$num;?></td>
                        <td><?=$data_keuangan['nama_paket'];?></td>
                        <td><?=$data_keuangan['harga_total'];?></td>
                        <td><?=$data_keuangan['nama_user'];?></td>
                        <td><?=$data_keuangan['bukti_transfer'];?></td>
                        <td><?=$data_keuangan['jumlah_transfer'];?></td>
                        <td><?=$status?></td>
                    </tr><?php }while($data_keuangan=mysqli_fetch_assoc($query_keuangan));?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
    include "footer.php";
?>
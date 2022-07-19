<?php
    include "header.php";
    $query_paket=mysqli_query($con,"SELECT * FROM data_paket  ORDER BY nama_paket ASC");
    $query_paket1=mysqli_query($con,"SELECT * FROM data_paket ORDER BY nama_paket ASC");
    $query_pesanan=mysqli_query($con,"SELECT * FROM pesanan ORDER BY id_pesanan ASC");
    $query_pesanan1=mysqli_query($con,"SELECT * FROM pesanan ORDER BY id_pesanan ASC");
    $query_keuangan=mysqli_query($con,"SELECT * FROM keuangan ORDER BY id_keuangan ASC");
    $data_paket=mysqli_fetch_assoc($query_paket);
    $data_pesanan=mysqli_fetch_assoc($query_pesanan);
    $data_keuangan=mysqli_fetch_assoc($query_keuangan);
?>
<div class="row">
    <div class="col-md-12">
        <h2>Halaman Admin</h2>   
        <h5>Welcome, <?=$_SESSION['nama_user'];?>.</h5>
    </div>
</div>

<hr/>

<div class="row text-center">
    <div class="col-md-3 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-red set-icon">
                <i class="fa fa-envelope-o"></i>
            </span>
            <div class="text-box" >
            <p class="main-text"align="center"><br><br><br><br><?php $num=0; while(mysqli_fetch_assoc($query_paket1)){
                    $num++;};
                echo $num;?></p>
            <p class="text-muted">Jumlah Paket Perawatan</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-green set-icon">
                <i class="fa fa-bars"></i>
            </span>
            <div class="text-box" >
                <p class="main-text"align="center"><br><br><br><br><?php $num=0; while(mysqli_fetch_assoc($query_pesanan1)){
                        $num++;};
                        echo $num;?></p>
                <p class="text-muted">Jumlah Pesanan</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-blue set-icon">
                <i class="fa fa-bell-o"></i>
            </span>
            <div class="text-box" >
                <?php
                include "../Config/koneksi.php";
                $query_keuangan3=mysqli_query($con,"SELECT * FROM keuangan WHERE status_keuangan='1' ORDER BY id_keuangan ASC");
                ?>
                <p class="main-text"align="center"><br><br><br><br><?php $num=0; while(mysqli_fetch_assoc($query_keuangan3)){
                        $num++;};
                        echo $num;?></p>
                <p class="text-muted">Pembayaran Terkonfirmasi</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-6">           
        <div class="panel panel-back noti-box">
            <span class="icon-box bg-color-brown set-icon">
                <i class="fa fa-rocket"></i>
            </span>
            <div class="text-box" >
                <?php
                include "../Config/koneksi.php";
                $query_keuangan4=mysqli_query($con,"SELECT * FROM keuangan WHERE status_keuangan='0' ORDER BY id_keuangan ASC");
                ?>
                <p class="main-text" align="center"><br><br><br><br><?php $num=0; while(mysqli_fetch_assoc($query_keuangan4)){
                   $num++;};
                    echo $num;?></p>
                <p class="text-muted">Pembayaran Belum Terkonfirmasi</p>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row"> 
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-header">
                <a href="data_kosan.php" style="color: black;text-decoration: underline;">Table Data Paket Perawatan</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Paket Perawatan</th>
                                <th>Jenis Paket</th>
                                <th>Jumlah Tersedia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $num=0; $sisa=0; do{$num++; 
                               # $sisa=$data_paket['jumlah_tersedia']-$data_paket['sudah_diisi'];?>
                            <tr>
                                <td><?=$num;?></td>
                                <td><?=$data_paket['nama_paket'];?></td>
                                <td><?=$data_paket['jenis_paket'];?></td>
                                <td><?=$data_paket['jumlah_tersedia'];?></td>
                            </tr>
                            <?php }while($data_paket=mysqli_fetch_assoc($query_paket));?>                                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    include "footer.php";
?>
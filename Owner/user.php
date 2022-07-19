<?php
    include "header.php";
    $query_user=mysqli_query($con,"SELECT * FROM user WHERE level='customer'");
    $data_user=mysqli_fetch_assoc($query_user);
?>
<div class="card">
    <div class="table-responsive">
        <div class="card-header">
            Table Data  Customer
        </div>
        <div class="card-body">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Customer</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nomor HP</th>
                </tr>
            </thead>
                <tbody> <?php $num=0; do{ $num++?>
                    <tr>
                        <td><?=$num;?></td>
                        <td><?=$data_user['nama_user'];?></td>
                        <td><?=$data_user['email'];?></td>
                        <td><?=$data_user['username'];?></td>
                        <td><?php echo substr($data_user['password'],0,10);?></td>
                        <td><?=$data_user['no_hp'];?></td>
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
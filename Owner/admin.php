<?php
    include "header.php";
    $query_user=mysqli_query($con,"SELECT * FROM user WHERE level='admin' ORDER BY id_user ASC");
    $query_user1=mysqli_query($con,"SELECT * FROM user WHERE level='admin' AND status_user='0'");
    $data_user=mysqli_fetch_assoc($query_user);
    $data_user1=mysqli_fetch_assoc($query_user1);
?> 
<div class="card">
    <div class="card-header">
        Table Data Admin
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered table-hover table-responsive">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Admin</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nomor HP</th>
                       
                    </str>
                </thead>
                    <tbody> <?php $num=0; do{$num++; if ($data_user['status_user']==0) {
                    } ?>
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
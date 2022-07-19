<?php
    include "header.php";
    $query_user=mysqli_query($con,"SELECT * FROM user WHERE level='admin' ORDER BY id_user ASC");
    $query_user1=mysqli_query($con,"SELECT * FROM user WHERE level='admin' AND status_user='0'");
    $data_user=mysqli_fetch_assoc($query_user);
    $data_user1=mysqli_fetch_assoc($query_user1);
?> 
<table class="table table-striped table-bordered table-hover">
    <form action="../Config/data.php" method="POST">
        <h2>Input Data Admin</h2>
        <tr>
            <td>Nama Admin</td>
            <td><input type="text" name="nama_user" style="width:350px"  required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" style="width:300px"  required></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" style="width:250px"  required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" style="width:250px"  required></td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td><input type="text" name="no_hp" style="width:200px"  required></td>
        </tr>
        <tr>
            <td colspan="2"><input type="hidden" name="level" value="admin"><input type="submit" name="input_user" value="Input" style="background-color: #B22222; color:white "></td>
        </tr>
    </form>
</table>
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
                        <th>Status</th>
                        <th>Aksi</th>
                    </str>
                </thead>
                    <tbody> <?php $num=0; do{$num++; if ($data_user['status_user']==0) {
                        $status="Pending";
                    }else if ($data_user['status_user']==1) {
                        $status="Diterima";
                    }else if ($data_user['status_user']==2){
                        $status="Ditolak";
                    } ?>
                        <tr>
                            <td><?=$num;?></td>
                            <td><?=$data_user['nama_user'];?></td>
                            <td><?=$data_user['email'];?></td>
                            <td><?=$data_user['username'];?></td>
                            <td><?php echo substr($data_user['password'],0,10);?></td>
                            <td><?=$data_user['no_hp'];?></td>
                            <td><?=$status;?></td>
                            <td> <a href="update_admin.php?id=<?=$data_user['id_user'];?>&user=Admin">Update</a> | 
                            <a href="delete_user.php?id=<?=$data_user['id_user'];?>&level=<?=$data_user['level']?>">Delete</a>
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
<?php
    include "header.php";
    $id=$_GET['id'];
    $user=$_GET['user'];
    $query_user=mysqli_query($con,"SELECT * FROM user WHERE id_user='$id'");
    $data_user=mysqli_fetch_assoc($query_user);
?>
<table class="table table-striped table-bordered table-hover">
    <form action="../Config/data.php" method="POST">
        <h2>Edit <?=$user;?></h2>
        <tr>
            <td>Nama</td>
            <input type="hidden" name="id_user" value="<?=$data_user['id_user'];?>">
            <td><input type="text" name="nama_user" style="width:350px" value="<?=$data_user['nama_user'];?>" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" style="width:300px" value="<?=$data_user['email'];?>" required></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" style="width:250px" value="<?=$data_user['username'];?>" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" style="width:250px" required></td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td><input type="text" name="no_hp" style="width:200px" value="<?=$data_user['no_hp'];?>" required></td>
        </tr>
        <tr>
            <td colspan="2"><input type="hidden" name="level" value="Admin"><input type="submit" name="update_user" value="Input" style="background-color: #B22222; color:white "></td>
        </tr>
    </form>
</table>   
<?php
include"../../config/koneksi.php";
$nama_pengirim = $_POST["nama_pengirim"];
$idu=$_POST['idu'];
$nama_kosan=$_POST['nama_kosan'];
$isi_ulasan = $_POST["isi_ulasan"];
$parent_id_ulasan = $_POST["parent_id_ulasan"];

$query_ulasan = mysqli_query($con,"INSERT INTO ulasan (parent_id_ulasan,id_user,nama_pengirim,id_kosan,isi_ulasan) VALUES ('$parent_id_ulasan','$idu','$nama_pengirim','$nama_kosan', '$isi_ulasan')");
if (!$query_ulasan) {
	echo '<script>alert("Error");</script>';
}
?>


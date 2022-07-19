<?php
include"../config/koneksi.php";
if (isset($_POST['submit'])) {
$parent_id_ulasan = $_POST["parent_id_ulasan"];
$id_user=$_POST['id_user'];
$nama_pengirim = $_POST["nama_pengirim"];
$nama_paket=$_POST['nama_paket'];
$isi_ulasan = $_POST["isi_ulasan"];

$query_ulasan = mysqli_query($con,"INSERT INTO ulasan (parent_id_ulasan,id_user,nama_pengirim,id_paket,isi_ulasan) VALUES ('$parent_id_ulasan','$id_user','$nama_pengirim','$nama_paket', '$isi_ulasan')");
if (!$query_ulasan) {
	echo '<script>alert("Error");</script>';
}
?>
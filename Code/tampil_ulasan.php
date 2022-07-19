<?php
include '../Config/koneksi.php';
$output='';
$query_ulasan =mysqli_query($con,"SELECT * FROM ulasan JOIN data_paket ON ulasan.id_paket=data_paket.id_paket WHERE parent_id_ulasan = '0' ORDER BY id_ulasan DESC");

while ($data_ulasan=mysqli_fetch_assoc($query_ulasan)) {
  $output .= '
    <div class="card" style="border:0">
    <h4 style="float: left;">'.$data_ulasan["nama_customer"].'<small style="float: right;"> Posted on <i>'.$data_ulasan["tanggal"].'</i></small></h4>
    <div class="card card-body" style="float: left;margin-bottom:20px;">
      <p style="font-size:1.3rem"><b>'.$data_ulasan['nama_paket'].'</b></p>
      <p>'.$data_ulasan['isi_ulasan'].'</p>
      <div align="right">
              <button type="button" class="btn btn-primary reply" id="'.$data_ulasan["id_ulasan"].'">Reply</button>
            </div>
    </div>
  ';
  $output .= ambil_reply($con, $data_ulasan["parent_id_ulasan"]);
}
 
echo $output;
 
function ambil_reply($con, $parent_id = 0, $marginleft = 0)
{
  $output='';
  $query_ulasan1 ="SELECT * FROM ulasan JOIN data_paket ON ulasan.id_paket=data_paket.id_paket WHERE parent_id_ulasan=?";
  $dewan1 = $con->prepare($query_ulasan1);
  $dewan1->bind_param("s", $parent_id);
  $dewan1->execute();
  $res1 = $dewan1->get_result();
 
  $count = $res1->num_rows;
  if($parent_id == 0) {
    $marginleft = 0;
  } else {
    $marginleft = $marginleft + 48;
  }
  
  if($count > 0){
    while ($data_ulasan = $res1->fetch_assoc()) {
      $output .= '
        <div class="card" style="border:0 ;margin-left:'.$marginleft.'px;">
    <h4 style="float: left;">'.$data_ulasan["nama_pengirim"].'<small style="float: right;"> Posted on <i>'.$data_ulasan["tanggal"].'</i></small></h4>
    <div class="card card-body" style="float: left;margin-bottom:20px;">
      <p style="font-size:1.3rem"><b>'.$data_ulasan['nama_paket'].'</b></p>
      <p>'.$data_ulasan['isi_ulasan'].'</p>
      <div align="right">
              <button type="button" class="btn btn-primary reply" id="'.$data_ulasan["id_ulasan"].'">Reply</button>
            </div>
    </div>
      ';
      $output .= ambil_reply($con, $data_ulasan["id_ulasan"], $marginleft);
    }
  }
  return $output;
}
?>
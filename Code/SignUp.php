<?php 
  error_reporting(0);
  session_start();
  if(!$_SESSION['id_user']){$log= "LogIn.php";$log1= "Log In";}else{$log= "LogOut.php";$log1= "Log Out";}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Pendaftaran</title>
  <link rel="icon" type="image" href="../Assets/img/LOGO.jpeg">
  <link rel="stylesheet" type="text/css" href="../Assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../Assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../Assets/css/card.css">
  <link rel="stylesheet" type="text/css" href="../Assets/css/Style.css">
  <link rel="stylesheet" type="text/css" href="../Assets/css/font-awesome.css">
  <style type="text/css">
    .site-header {
  background-color: #96858F;
}
.site-header a {
  color: #fff;
  transition: ease-in-out color .15s;
}
.site-header a:hover {
  color: #fff;
  text-decoration: none;
}
.judul{
  text-align: center;
  text-transform: uppercase;
}
.judul h1{
  padding: 40px;
}
h4{
  text-decoration: underline;
  text-transform: capitalize;
}
  </style>
</head>
<body style="background-color: #f1f1f1">
  <nav class="navbar site-header" style="margin-bottom: 20px;box-shadow: 0 0 10px 0 rgba(0,0,0,1) !important;">
    <div class="container">
      <a class="" href="../">
            <img src="../Assets/img/LOGO.jpeg" width="120px" height="80px">
      </a>
      <div class="" style="float: right;">
          <a id="pesanan" class="" href="paket.php">Paket Kecantikan</a>
          <a class="px-3" href="pesanan.php?idu=<?=$_SESSION['id_user'];?>&idk=0">Pemesanan</a>
          <a class="px-3" href="keuangan.php">Konfirmasi Pembayaran</a>
          <a class="px-3" href="SignUp.php">Pendaftaran</a>
          <a class="px-3" href="ulasan.php?id=<?$_SESSION['id_user']?>">Ulasan</a>
          <a class="px-3" href="AboutUs.php">About Us</a>
          <a class="py-2 d-md-inline-block" href="<?=$log?>" style="border:1px solid white;border-radius: 8px;padding: 5px;margin-left: 20px"><?=$log1?></a>      
      </div>
    </div>
  </nav>
  <div class="container-fluid" style="width: 100%;max-width: 350px;padding: 15px;margin: auto;" >
    <div class="card" style="margin: auto; background-color: #F0F1EC">
      <div class="text-center card-header text-white" style="background-color: #9DA0A7">
        <h2>Pendaftaran</h2>
      </div>
      <div class="card-body">
          <form action="../Config/data.php" method="POST" onsubmit="return vali()">
              <p>Nama :</p>
              <input class="form-control" type="text" name="nama_user" required>
              <label>E-mail :</label>
              <input class="form-control" type="email" name="email" required>
              <label>No. Handphone :</label>
              <input class="form-control" type="tel" name="no_hp" required>
              <label>Username :</label>
              <input class="form-control" type="text" name="username" required>
              <label>Password :</label>
              <input class="form-control" type="password" id="pass1" name="password" required>
              <label>Confirm Password :</label>
              <input class="form-control" type="password" id="pass2" required>
              <br>
              <input class="btn" type="submit" name="daftar" value="Daftar" style="background-color: #244065; color: white">
              <input class="btn" type="reset" name="reset" value="Reset" style="margin-left: 46%; background-color: #DD5B4E;  color: white">
            </form>
        </div>
      </div>
    </div>
<footer>
  <div class="footer" style="width:100%">
    <div class="card site-header text-white" id="contact_us">
      <div class="card-img-overlay" style="position:sticky;">
        <p class="card-text text-center">
          <a href="https://www.instagram.com/herfinaintan" target="_blank" style="color:white;"><i class="fa fa-instagram fa-2x px-2"></i></a>
          <a href="https://api.whatsapp.com/send?phone=082223766700&text=Halo Customer Beauty Klinik" target="_blank" style="color:white;"><i class="fa fa-phone fa-2x px-2"></i></a>
          <a href="https://www.facebook.com/herfinaintan" target="_blank"style="color:white;"><i class="fa fa-facebook fa-2x px-2"></i></a>
          </p>
         <h5 class="card-title" style="float:right">Copyright &copy Sipelik 2020</h5>
      </div>
    </div>
  </div>
  </div>
</footer>
  <script type="text/javascript">
    function vali(){
      var pass1=document.getElementById('pass1');
      var pass2=document.getElementById('pass2');
      if(pass1.value==pass2.value){
        return true;
      }else {
        alert(" Unmatch Password");
        return false;
      }
    }
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="../Assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../Assets/js/bootstrap.js"></script>
</body>
</html>
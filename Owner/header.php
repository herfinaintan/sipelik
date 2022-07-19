	<?php
	include "../Config/koneksi.php";
	include "../Config/log_ses.php";
	$id=$_SESSION['id_user'];
    if($_SESSION['level']=='admin'){
        header("location:../Admin/");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Owner</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../Assets/css/font-awesome.css" />
    <link href="../Assets/css/custom.css" rel="stylesheet" />
    <link rel="icon" type="images" href="../Assets/img/LOGO.jpeg">
    <link href="../Assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
    <style type="text/css">
.wrap {
    width: 100%;
    height: 100%;
    background-color: #9DA0A7;
}
.bg-navy {
  background-color: #11141B !important;
}

a.bg-navy:hover, a.bg-navy:focus,
button.bg-navy:hover,
button.bg-navy:focus {
  background-color:#11141B !important;
}
.sidebar{
    width: 100%;
    background-color: #9DA0A7;
    position: absolute;
    z-index: 100;
}
ul {
    padding: 0px;
}
ul li{
    list-style-type: none;
    border-bottom: 1px solid rgba(0,0,0,0.5);
}
ul li a {
    color: black;
    display: block;
    padding: 18px 0px 18px 25px;
    transform: all 200ms ease-in;
}
ul li a:hover{
    text-decoration: none;
    color: white;
}
.page-wrapper {
    padding: 15px 15px;
    background:#F3F3F3;
}
.page-inner {
    width:100%;
    margin:10px 20px 10px 0px;
    background-color:#fff!important;
    padding:10px;
    height: 100%;
}
.noti-box .icon-box {
    display: block;
    margin: 1% 35% 1% 35%;
    line-height: 100px;
    width: 100px;
    height:100px;
    vertical-align: middle;
    text-align: center;
    font-size: 40px;
}
@media (min-width: 476px){
.noti-box .icon-box{
    margin: 1% 25% 1% 25%;
}
}
@media (min-width: 768px){
    .sidebar{
        width: 240px;
        position: absolute;
    }
}
.navbar-dark{
    background-color: #11141B;
}
@media (min-width: 992px){
    .collapse:not(.show){
        display: block;
    }
    .page-wrapper{
        margin: 0 0 0 0px;
        padding: 15px 30px;
        height: 100%;   
    }
    .content{
        margin-left: 240px;
    }    
}


    </style>
</head>
<body class="wrap">
    <nav class="navbar navbar-expand-lg site-navbar-target" id="ftco-navbar" style="background-color:  #4C495C">
        <div class="container">
            <a class="navbar-brand" href="../Admin/">
                <img src="../Assets/img/LOGO.jpeg" width="120" height="80" class="d-inline-block align-top img-responsive" alt="">
            </a>
            <a href="../Code/logout.php"><button class="btn btn-danger">Log Out</button></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="true" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>Menu
            </button>
        </div>
    </nav>
    <aside class="sidebar collapse" id="nav">
        <div class="menu" >
            <ul class="menu-content navbar-nav nav ml-auto">
                <li>
                    <a href="index.php"><i class="fa fa-home fa-3x"></i> Home</a>
                </li>
                <li>
                    <a href="user.php"><i class="fa fa-edit fa-3x"></i> Customer</a>
                </li>
                <li>
                    <a href="admin.php"><i class="fa fa-edit fa-3x"></i> Admin</a>
                </li>
                <li>
                    <a href="datapaket.php"><i class="fa fa-cube fa-3x"></i> Paket Perawatan</a>
                </li>
                <li>
                    <a href="pesanan.php"><i class="fa fa-dashboard fa-3x"></i> Pesanan</a>
                </li>
                <li>
                    <a href="keuangan.php"><i class="fa fa-money fa-3x"></i> Keuangan</a>
                </li>
            </ul>
        </div>
    </aside>
    <section class="content page-wrapper">
        <div class="page-inner">
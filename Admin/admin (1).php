<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Super Admin</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../Assets/css/font-awesome.css" />
    <link href="../Assets/css/custom.css" rel="stylesheet" />
    <link href="../Assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../Assets/css/admin.css" />
</head>
<body class="wrap">
    <nav class="navbar navbar-expand-lg navbar-dark bg-navy  site-navbar-target" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="../Dashboard/">
                <img src="" width="" height="" class="d-inline-block align-top" alt="">B-Kost
            </a>
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
                    <a href="user.php"><i class="fa fa-edit fa-3x"></i> User</a>
                </li>
                <li>
                    <a href="admin.php"><i class="fa fa-edit fa-3x"></i> Admin</a>
                </li>
                 <li>
                    <a href="superadmin.php"><i class="fa fa-edit fa-3x"></i>Super Admin</a>
                </li>
                <li>
                    <a href="datakosan.php"><i class="fa fa-cube fa-3x"></i> Data Kosan</a>
                </li>
                <li>
                    <a href="pesanan.php"><i class="fa fa-dashboard fa-3x"></i> Pesanan</a>
                </li>
                 <li>
                    <a href="keuangan.php"><i class="a fa-cube fa-3x"></i> Keuangan</a>
                </li>
            </ul>
        </div>
    </aside>
    <section class="content page-wrapper">
        <div class="page-inner">    
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <h2>Input Data Admin(Pemilik Kosan)</h2>
                                        <tr>
                                            <td>Nama Admin</td>
                                            <td><input type="text" name="namauser" style="width:350px"  required></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td><textarea name="alamat" value="alamat" style="width:400px; height:70px" required></textarea></td>
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
                                            <td><input type="text" name="password" style="width:250px"  required></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td><input type="text" name="tgllahir" style="width:200px"  required></td>
                                        </tr>
                                         <tr>
                                            <td>Nomor HP</td>
                                            <td><input type="text" name="nomorhp" style="width:200px"  required></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><input type="submit" name="simpan" value="simpan"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>                             
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div class="panel-heading">
                                        Table Data Admin (Pemilik Kosan)
                                    </div>
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID Admin</th>
                                                <th>Nama Admin</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Nomor HP</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                            <tr>
                                                    <td>1</td>
                                                    <td>Atha Narentha</td>
                                                    <td>Kober, Banyumas, Jawa Tengah</td>
                                                    <td>athanarentha@gmail.com</td>
                                                    <td>Atha Narentha</td>
                                                    <td>Atha123</td>
                                                    <td>21 Oktober 2000</td>
                                                    <td>085123222444</td>
                                                    <td> <a href="update.php">Update</a><a href="hapus.php"> | Delete</a> </td>
                                                </tr>
                                                                                            <tr>
                                                    <td>2</td>
                                                    <td>Maulida Hanifah</td>
                                                    <td>Purwoketo Timur, Banyumas, Jawa Tengah</td>
                                                    <td>maulidahanifah@gmail.com</td>
                                                    <td>Maulida </td>
                                                    <td>Maul123</td>
                                                    <td>22 Oktober 2000</td>
                                                    <td>085123222444</td>
                                                     <td> <a href="update.php">Update</a><a href="hapus.php"> | Delete</a> </td>
                                                </tr>
                                                                                            <tr>
                                                   <td>3</td>
                                                    <td>Nahda Faadhila</td>
                                                    <td>Riau,Kepulauan Riau, Sumatera</td>
                                                    <td>nahdafaadhila@gmail.com</td>
                                                    <td>Nahda Napad</td>
                                                    <td>Napd123</td>
                                                    <td>25 Oktober 2000</td>
                                                    <td>085123222444</td>
                                                    <td> <a href="update.php">Update</a><a href="hapus.php"> | Delete</a> </td>
                                                </tr>
                                                                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</section>
</div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="../Assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../Assets/js/bootstrap.js"></script>
    <script src="../Assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="../Assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../Assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../Assets/js/custom.js"></script>
</body>
</html>
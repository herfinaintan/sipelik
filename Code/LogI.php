<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Log In</title>
  <link rel="stylesheet" type="text/css" href="../Assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../Assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../Assets/css/card.css">
  <style type="text/css">
    body {
      	display: flex;
      	align-items: center;
      	padding-top: 2%;
      	padding-bottom: 2%;
      	background-color: #f5f5f5;
    }
    a{
      	text-decoration: none;
    }
  </style>
</head>
<body>
	<body style="height: 100%">
  <div class="container-fluid" style="width: 100%;max-width: 350px;padding: 15px;margin: auto;" >
    <div class="card" style="margin: auto;">
    	<div class="text-center card-header">
        	<h2>Log In</h2>
    	</div>
	    <div class="card-body">
		    <form action="../data.php" method="POST">
		    	<label>Username :</label>
		        <input class="form-control" type="text" name="username" required>
		        <label>Password :</label>
		        <input class="form-control" type="password" id="pass1" name="pass" required><br>
		        <input class="btn btn-primary" type="submit" name="login" value="Log In">
		        <input class="btn btn-danger" type="reset" name="reset" value="Reset" style="margin-left: 50%;">
	        </form>
	        <p style="margin-top: 20px;margin-bottom: 5px">
	        	Belum memiliki akun ? <a href="SignUp.php">Daftar</a><br/>
	        	Lupa password atau username ? <a href="forget.php">Lupa</a>
	        </p>
	    </div>
	</div>
	<script src="../Assets/js/jquery.js"></script> 
	<script src="../Assets/js/bootstrap.js"></script>
</body>
</html>
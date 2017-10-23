<!DOCTYPE html>
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Pusat Penelitian Hasil Hutan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
    <link rel="stylesheet" href="css/bootstrap.css" />
	 <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/login.css" />
	 <link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
</head>

<body >
<?php
error_reporting(0);
session_start();
include_once("library/koneksi.php");

if(@$_POST["login"]){ //jika tombol Login diklik
	$user=$_POST["user"];
	$pass=$_POST["pass"];
	$level=$_POST["level"];
	
	if($user!="" && $pass!=""){
		include_once("library/koneksi.php");
		$em = mysql_query("select * from login where password = '$pass' AND username = '$user'");
		$data = mysql_fetch_assoc($em);
		
		if( $level=='members' && $data["username"] == $user && $data["password"] == $pass){
			echo "<div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					Data Telah Ditemukan!!.
                  </div>";
			$_SESSION["user"]=$data["username"];
			$_SESSION["pass"]=$data["password"];
			
			$_SESSION["namalengkap"]=$data["nama"];
			$_SESSION["leveluser"]   = $data["level"];
			header("Location:admin/index.php");
		}else{
			echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Data Tidak Ditemukan!!</b>
                  </div><center>";
		}
	}

}
?>
   <!-- PAGE CONTENT --> 
   <div class="col-md-4 col-md-offset-4 form-login">
   <div class="outter-form-login">
        
            <form action="" class="inner-login" method="post">
            <h3 class="text-center title-login">Login User</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="user" placeholder="Username" required >
                </div>
<input type="hidden" name="level" value="members">
                <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="Password" required>
                </div>
                
                <input type="submit" class="btn btn-block btn-warning" value="LOGIN" name="login" />
                
                <div class="text-center forget">
                    <p><a href="">Forgot Password ?</a></p>
                </div>
            </form>
        </div>
    </div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="js/jquery-2.0.3.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>

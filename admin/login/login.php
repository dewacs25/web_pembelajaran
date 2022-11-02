<?php include "../../db/koneksi.php";
session_start();
error_reporting(0);


$user = $_POST['user'];
$pass = $_POST['pass'];

$passmd5 = md5($pass);

if (isset($_POST['submit'])) {

	$cekadmin = mysqli_query($conect, "SELECT * FROM tb_admin WHERE username='$user' and password='$passmd5' ");
	$row = mysqli_fetch_array($cekadmin);
	$isi = mysqli_num_rows($cekadmin);
	$idadmin = $row['id_admin'];
	if ($isi > 0) {
		$_SESSION['admin'] = $user;
		$_SESSION['idadmin'] = $idadmin;
		echo "<script>alert('selamat datang $user');document.location='../index.php'</script>";
	} else {
		header("location:login.php?pesan=gagal");
	}
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">

                <?php
                if (isset($_GET['login_dulu'])) {
                    echo "<div class='alert alert-danger' role='alert'>
                    <i class='fas fa-exclamation-circle'></i>&nbsp;&nbsp;Silahkan Login terlebih dahulu 
                </div>";
                }elseif (isset($_GET['pesan'])) {
                    echo "<div class='alert alert-danger' role='alert'>
                    <i class='fas fa-exclamation-circle'></i>&nbsp;&nbsp;Username Atau Password Salah
                </div>";
                }
                ?>


                <p class="login-box-msg">Sign in to start your session</p>

                <form action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" name="user" class="form-control" placeholder="User">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user-ninja"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>

                </form>


            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>

</body>

</html>
<?php

include "../../../../db/koneksi.php";
session_start();
error_reporting(0);

if ($_SESSION['admin'] == "") {
    header("location:../../../login/login.php?login_dulu");
}




$random = uniqid();
$tglr = date('YmdHis');
$random_string = $tglr.$random;


$judul = $_POST['judul'];
$isi = $_POST['isi'];

$foto = $_FILES['gambar']['tmp_name'];
$namafoto = $_FILES['gambar']['name'];

$ext = strtolower(end(explode(".", $namafoto)));
$newnama = $random_string . '.' . $ext;
$id = $_GET['id'];
$b = mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM tb_tipsdantrik WHERE id_tips='$id'"));
$gambarbaru = $_POST['gambarb'];


if (isset($_POST['input'])) {

    if (empty($foto)) {

        $qus = mysqli_query($conect, "UPDATE `tb_tipsdantrik` SET `judul`='$judul',`isi`='$isi' WHERE id_tips='$id'");
        if ($qus) {
            echo "<script>alert('input berhasil');document.location='../tipsdantrik.php'</script>";
        } else {
            echo "<script>alert('input gagal silahkan coba lagi');</script>";
        }
    } else {
        unlink('../../../public/img/gambar_tipsdantrik/' . $gambarbaru);
        move_uploaded_file($foto, '../../../public/img/gambar_tipsdantrik/' . $newnama);

        $sql = mysqli_query($conect, "UPDATE `tb_tipsdantrik` SET `judul`='$judul',`isi`='$isi',`gambar`='$newnama' WHERE id_tips='$id'");
        if ($sql) {
            echo "<script>alert('input berhasil');document.location='../tipsdantrik.php'</script>";
        } else {
            echo "<script>alert('input gagal silahkan coba lagi');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | DataTables</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index.html" class="nav-link">Home</a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index.html" class="brand-link">
                <img src="../../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../../index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v1</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="../materi.php" class="nav-link">
                                <p><i class="fas fa-backward"></i> &nbsp;&nbsp;&nbsp;Kembali</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit Matri</h1>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">

                                    <input type="text" class="form-control" name="judul" placeholder="Masukan Judul Artikel" value="<?= $b['judul']; ?>" size="50" required autocomplete="off">
                                    <br><br>
                                    <textarea name="isi" class="ckeditor" id="ckedtor" placeholder="Isi berita"><?= $b['isi']; ?></textarea>
                                    <br>

                                    <label class="mt-3">Masukan gambar</label>


                                    <div class="input-group mb-3 mt-2">
                                        <input type="hidden" name="gambarb" value="<?= $b['gambar']; ?>">
                                        <input type="file" name="gambar" accept=".jpg, .png, .JPEG, .JPG, .PNG" class="form-control" id="inputGroupFile02">
                                        <label class="input-group-text" for="inputGroupFile02">Gambar</label>
                                    </div>

                                    <button type="submit" name="input" class="btn btn-warning w-100 mb-3">Simpan</button>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>

                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.0
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./ckeditor -->
    <script type="text/javascript" src="../crud_materi/ckeditor/ckeditor.js"></script>
    <!-- jQuery -->
    <script src="../../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="../../../plugins/datatables/jquery.dataTables.js"></script>
    <script src="../../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../../dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
</body>

</html>

<?php



?>
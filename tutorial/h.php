<?php
include "../db/koneksi.php";
$id = $_GET['id'];
$sqlisi2 = mysqli_query($conect, "SELECT * FROM tb_isi_materi WHERE id_isi='$id'");
$judul = mysqli_fetch_assoc($sqlisi2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/fontawesome/css/all.css">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">


    <title></title>

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light shadow" style="z-index: 100;" id="header">
        <div class="container-fluid ">
            <a class="navbar-brand" href="../index.php"><img src="../asset/img/logo-pt.png" alt="" width="220px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-lg-start text-center bgg" id="navbarNav">
                <form class="d-flex" role="search">
                    <span class="input-group-text bg-light rounded-0 rounded-start" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input class="form-control me-2 rounded-0 rounded-end" type="search" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                    <button class="btn btn-outline-success d-none" type="submit">Search</button>
                </form>

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item me-lg-4">
                        <a class="nav-link hover" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link hover " href="../artikel.php">Artikel</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link hover " href="../tutorial.php">Tutorial</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link hover " href="../tipsdantrik.php">Tips dan trik</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link hover " href="../index.php#kontak">Hubungi Kami</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid bg-secondary bg-opacity-25 p-3 text-center">
        <h3 class="text-secondary">#<?= $judul['part'] ?></h3>
    </div>

    <div class="container-fluid mb-5" style="margin-top: 40px;">
        <div class="row">
            <?php
            $id = $_GET['id'];
            $sqlisi = mysqli_query($conect, "SELECT * FROM tb_isi_materi WHERE id_isi='$id'");
            while ($isi = mysqli_fetch_assoc($sqlisi)) {
                $id_materi = $isi['id_materi'];
            ?>
                <div class="col-lg-7 col-12 ">
                    <div class="card shadow" style=" min-height: 28rem;">
                        <div class="card-body">
                            <h2 class="card-title"><b><?= $isi['judul'] ?></b></h2>
                            <br>
                            <span class="card-subtitle mb-2 isiii"><?= $isi['isi'] ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>



            <div class="col-lg-5 col-12 ">
                <div class="card shadow">
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table id="example2" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Materi</th>
                                        <th>Part</th>
                                        <th>---</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sqlisimateeri = mysqli_query($conect, "SELECT * FROM tb_isi_materi WHERE id_materi='$id_materi' ORDER BY tgl ASC");
                                    while ($isi = mysqli_fetch_assoc($sqlisimateeri)) {
                                    ?>
                                        <?php if ($isi['part'] == $judul['part']) { ?>
                                            <tr class="bg-secondary text-light">
                                                <td><?= $isi['judul'] ?></td>
                                                <td>#<?= $isi['part']; ?></td>
                                                <td><a class="text-danger" href="h.php?id=<?= $isi['id_isi'] ?>"><i class="fa-solid fa-circle-play"></i></a></td>
                                            </tr>
                                        <?php } else { ?>

                                            <tr class="">
                                                <td><?= $isi['judul'] ?></td>
                                                <td>#<?= $isi['part']; ?></td>
                                                <td><a href="h.php?id=<?= $isi['id_isi'] ?>"><i class="fa-solid fa-circle-play"></i></a></td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- footer -->
    <?php
    include_once "../pages/footer.php";
    ?>

    <script src="../asset/js/bootstrap.bundle.min.js"></script>


    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("header").classList.remove('show');
            } else {
                document.getElementById("header").classList.add('show');
            }
            prevScrollpos = currentScrollPos;
        }
    </script>


    <script src="../admin/plugins/jquery/jquery.min.js"></script>
    <script src="../admin/plugins/datatables/jquery.dataTables.js"></script>
    <script src="../admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": true,
            });
        });
    </script>

</body>

</html>
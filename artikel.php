<?php
include "db/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title></title>


</head>

<body>

    <nav class="animate__animated animate__fadeIn navbar navbar-expand-lg bg-light shadow" style="z-index: 100;" id="header">
        <div class="container-fluid ">
            <a class="navbar-brand" href="index.php"><img src="asset/img/logo-pt.png" alt="" width="220px"></a>
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
                        <a class="nav-link hover" href="index.php">Home</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link active " href="">Artikel</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link hover " href="tutorial.php">Tutorial</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link hover " href="tipsdantrik.php">Tips dan trik</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link hover " href="index.php#kontak">Hubungi Kami</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid bg-secondary bg-opacity-25 p-4 text-center">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="card border-0 bg-transparent" style="max-height: 10rem; min-height: 10rem;">
                    <div class="card-body position-absolute top-50 start-50 translate-middle w-100">
                        <h2 class="card-title fw-bold text-secondary float-lg-end animate__animated animate__backInLeft">Artikel Terbaru</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 d-lg-block d-none">

                <div class="card border-0 bg-transparent" style="max-height: 10rem; min-height: 10rem;">
                    <div class="card-body position-absolute top-50 start-50 translate-middle w-100">
                        <img src="asset/img/artikel.png" class="float-lg-start animate__animated animate__backInRight" width="200px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <?php
            $sqlartikel = mysqli_query($conect, "SELECT * FROM tb_artikel ORDER BY tgl DESC");
            while ($artikel = mysqli_fetch_assoc($sqlartikel)) {
            ?>
                <div class="col-lg-6 col-md-6 col-12 mb-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="admin/public/img/gambar_artikel/<?= $artikel['gambar'] ?>" class="img-fluid rounded-start" alt="Gambar ERROR" style="min-height: 100%; max-height: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="artikel/index.php?id=<?= $artikel['id_artikel'] ?>">
                                        <h5 class="card-title"><?= substr($artikel['judul'], 0, 60) ?>..</h5>
                                    </a>
                                    <p class="card-text"><?= substr($artikel['isi'], 0, 128) ?>...</p>
                                    <p class="card-text"><small class="text-muted"><?= $artikel['tgl'] ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>







    <!-- footer -->
    <?php
    include_once "pages/footer.php";
    ?>


    <script src="plugins/datatables/jquery.dataTables.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>

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

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 30,
            slidesPerGroup: 4,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 4000,
            },
        });
    </script>

   


</body>

</html>
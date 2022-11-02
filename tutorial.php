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

    <style>
        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-container {
            width: 100%;
            height: 300px;
            margin: 20px auto;
        }
    </style>
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
                        <a class="nav-link hover " href="artikel.php">Artikel</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link active " href="">Tutorial</a>
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
        <div class="container-sm">

            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card border-0 bg-transparent" style="max-height: 10rem; min-height: 10rem;">
                        <div class="card-body position-absolute top-50 start-50 translate-middle w-100">
                            <h4 id="typing" class="card-title fw-bold text-secondary float-lg-end animate__animated animate__backInLeft"></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 d-lg-block d-none">

                    <div class="card border-0 bg-transparent" style="max-height: 10rem; min-height: 10rem;">
                        <div class="card-body position-absolute top-50 start-50 translate-middle w-100">
                            <img src="asset/img/belajar.png" class=" animate__animated animate__fadeInRight" width="200px" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid mb-5 mt-5" id="tutorial">
        <div class="set mb-5 d-lg-block d-none">

            <div class="swiper mySwiper container ">
                <div class="swiper-wrapper content">

                    <?php
                    $sqlmateri = mysqli_query($conect, "SELECT * FROM tb_materi ORDER BY tgl DESC");
                    while ($materi = mysqli_fetch_assoc($sqlmateri)) {
                    ?>
                        <div class="swiper-slide card border-0">
                            <div class="col-12">
                                <div class="card text-start" style="min-width: 200px;">
                                    <img src="admin/public/img/gambar_materi/<?= $materi['gambar'] ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title fw-bold"><?= $materi['judul_materi'] ?></h4>
                                        <p class="card-text fs-6 opa"><?= substr($materi['isi'], 0, 150) ?></p>
                                        <a href="tutorial/index.php?id=<?= $materi['id_materi'] ?>" class="btn btn-outline-secondary mt-3">Lihat Tutorial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
            <div class="swiper-button-next text-secondary"></div>
            <div class="swiper-button-prev text-secondary"></div>
            <div class="swiper-pagination"></div>
        </div>



        <div class="set mb-5 d-lg-none d-block">

            <div class="swiper mySwiper2 container ">
                <div class="swiper-wrapper content">

                    <?php
                    $sqlmateri = mysqli_query($conect, "SELECT * FROM tb_materi ORDER BY tgl DESC");
                    while ($materi = mysqli_fetch_assoc($sqlmateri)) {
                    ?>
                        <div class="swiper-slide card border-0">
                            <div class="col-12">
                                <div class="card text-start" style="min-width: 200px;">
                                    <img src="admin/public/img/gambar_materi/<?= $materi['gambar'] ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title fw-bold"><?= $materi['judul_materi'] ?></h4>
                                        <p class="card-text fs-6 opa"><?= substr($materi['isi'], 0, 150) ?></p>
                                        <a href="tutorial/index.php?id=<?= $materi['id_materi'] ?>" class="btn btn-outline-secondary mt-3">Lihat Tutorial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <div class="swiper-button-next2 text-secondary"></div>
                <div class="swiper-button-prev2 text-secondary"></div>
                <div class="swiper-pagination2"></div>
            </div>
        </div>
    </div>






    <!-- footer -->
    <?php
    include_once "pages/footer.php";
    ?>


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
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
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
                delay: 12000,
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper2", {
            slidesPerView: 1,
            spaceBetween: 30,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination2",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next2",
                prevEl: ".swiper-button-prev2",
            },
            autoplay: {
                delay: 10000,
            },
        });
    </script>

    <script>
        var i = 0;
        var txt = 'Mulai belajar dengan terarah bersama WANTek Academy';
        var speed = 30;

        function typeWriter() {
            if (i < txt.length) {
                document.getElementById("typing").innerHTML += txt.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
            }
        }
        typeWriter()
    </script>


</body>

</html>
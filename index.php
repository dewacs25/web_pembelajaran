<?php
include "db/koneksi.php";
$mediasql = mysqli_query($conect, "SELECT * FROM tb_kontak");
$media = mysqli_fetch_assoc($mediasql);
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
                    <span class="input-group-text bg-light rounded-0 rounded-start" id="basic-addon1"><button class="bg-transparent border-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button></span>
                    <input class="form-control me-2 rounded-0 rounded-end fs-6" type="search" placeholder="Apa yang ingin anda Pelajari" aria-label="Search" aria-describedby="basic-addon1" style="width: 300px;">
                    <button class="btn btn-outline-success d-none" type="submit">Search</button>
                </form>

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item me-lg-4">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link hover " href="artikel.php">Artikel</a>
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


    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="card border-0" style=" max-height: 30rem; min-height: 28rem;">
                    <div class="card-body position-absolute top-50 start-50 translate-middle w-100">
                        <h2 class="card-title animate__animated animate__bounceInDown">Bangun Karirmu Sebagai Designner Profesional</h2>
                        <h6 class="card-subtitle mb-2 text-muted animate__animated animate__bounceInLeft">Mulai belajar terarah bersama WANTek Academy</h6>
                        <a href="tutorial.php#tutorial" class="btn btn-secondary animate__animated animate__flipInX">Belajar Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 d-lg-block d-none">
                <div class="card border-0 float-end " style="width: 30rem; max-height: 30rem; min-height: 28rem;">
                    <div class="card-body position-absolute top-50 start-50 translate-middle w-100">
                        <img src="asset/img/sarjana.png" class="float-end animate__animated animate__fadeInRight" width="500px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid mb-5 mt-5">
        <p class="text-center fs-3 text-dark fw-bold">Terpercaya Oleh</p>
        <div class="set">

            <div class="swiper mySwiper container mt-5 mb-5 d-lg-block d-none">
                <div class="swiper-wrapper content ">

                    <?php
                    $sqlmitra = mysqli_query($conect, "SELECT * FROM tb_mitra");
                    while ($mitra = mysqli_fetch_assoc($sqlmitra)) {
                    ?>
                        <div class="swiper-slide card border-0 ">
                            <div class="item col-auto col-lg-auto ms-2 ">
                                <div class="card me-5 mt-0 border-0 " style="min-height: 100px; max-height: 100px;">
                                    <img src="admin/public/img/gambar_mitra/<?= $mitra['gambar'] ?>" style="max-height: 100px; min-width: 100px; max-width: 100%;" class="card-img-top position-absolute top-50 start-50 translate-middle" alt="...">
                                </div>
                            </div>
                        </div>
                    <?php } ?>


                </div>
            </div>
            <div class="swiper mySwiper4 container mt-5 mb-5 d-lg-none d-block">
                <div class="swiper-wrapper content ">

                    <?php
                    $sqlmitra = mysqli_query($conect, "SELECT * FROM tb_mitra");
                    while ($mitra = mysqli_fetch_assoc($sqlmitra)) {
                    ?>
                        <div class="swiper-slide card border-0 ">
                            <div class="item col-auto col-lg-auto ms-2 ">
                                <div class="card me-5 mt-0 border-0 " style="min-height: 100px; max-height: 100px;">
                                    <img src="admin/public/img/gambar_mitra/<?= $mitra['gambar'] ?>" style="max-height: 100px; min-width: 100px; max-width: 100%;" class="card-img-top position-absolute top-50 start-50 translate-middle" alt="...">
                                </div>
                            </div>
                        </div>
                    <?php } ?>


                </div>
            </div>


            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
            <div class="swiper-pagination4 d-none"></div>
        </div>
    </div>

    <div class="container-fluid bg-secondary bg-opacity-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card border-0 bg-transparent" style="max-height: 20rem; min-height: 20rem;">
                        <div class="card-body position-absolute top-50 start-50 translate-middle w-100">
                            <h2 class="card-title">Materi Terbaru Kami</h2>
                            <h6 class="card-subtitle mb-2 text-muted">Mulai belajar terarah Bersama Kami</h6>
                            <a href="" class="btn btn-secondary">Belajar Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mt-lg-5">
                    <div class="mb-2 justify-content-end d-flex">
                        <button class="btn btn-outline-secondary badge text-black fs-6" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>
                        <button class="btn btn-outline-secondary badge text-black fs-6" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active d-none" aria-current="true" aria-label="Slide 1"></button>

                            <?php
                            // for ($i = 1; $i < 6; $i++) {
                            $i = 1;
                            $j = 2;
                            $sqlmateri2 = mysqli_query($conect, "SELECT * FROM tb_materi ORDER BY tgl DESC LIMIT 3");
                            while ($materi2 = mysqli_fetch_assoc($sqlmateri2)) {

                            ?>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?= $i++ ?>" aria-label="Slide <?= $j++ ?>"></button>

                            <?php } ?>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active d-none" data-bs-interval="1">
                                <img src="..." class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5></h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>

                            <?php
                            $sqlmateri = mysqli_query($conect, "SELECT * FROM tb_materi ORDER BY tgl DESC LIMIT 3");
                            while ($materi = mysqli_fetch_assoc($sqlmateri)) {
                            ?>

                                <div class="carousel-item" data-bs-interval="5000">
                                    <div class="card mb-3" style="max-width: auto;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="admin/public/img/gambar_materi/<?= $materi['gambar'] ?>" style="min-height: 100%;" class="img-fluid rounded-start" alt="asset/img/gambar.png">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h4 class="card-title"><?= $materi['judul_materi'] ?></h4>
                                                    <p class="card-text"><?= substr($materi['isi'], 0, 130) ?></p>
                                                    <p class="card-text"><small class="text-muted"><?= $materi['tgl'] ?></small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                    </div>



                </div>

            </div>

        </div>

    </div>


    <div class="container mt-5">
        <h3 class="text-center mb-5">Layanan jasa Training WANTek Academy</h3>

        <div class="row">
            <div class="set">

                <div class="swiper mySwiper2 container mb-5 d-lg-block d-none">
                    <div class="swiper-wrapper content">

                        <?php
                        $sqllayanan = mysqli_query($conect, "SELECT * FROM tb_layanan");
                        while ($layanan = mysqli_fetch_assoc($sqllayanan)) {
                        ?>
                            <div class="swiper-slide card border-0 ">
                                <div class="col-auto col-lg-auto mb-2">
                                    <div class="card shadow">
                                        <img src="admin/public/img/gambar_layanan/<?= $layanan['gambar'] ?>" class="card-img-top" alt="..." style="max-height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $layanan['judul'] ?></h5>
                                            <p class="card-text"><?= $layanan['isi'] ?></p>
                                            <a href="#" class="btn btn-outline-secondary">Call Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>


                    </div>
                    <!-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> -->
                    <div class="swiper-pagination2"></div>
                </div>

                <div class="swiper mySwiper3 container d-lg-none d-block mb-5">
                    <div class="swiper-wrapper content">

                        <?php
                        $sqllayanan = mysqli_query($conect, "SELECT * FROM tb_layanan");
                        while ($layanan = mysqli_fetch_assoc($sqllayanan)) {
                        ?>
                            <div class="swiper-slide card border-0 ">
                                <div class="col-auto col-lg-auto mb-2">
                                    <div class="card shadow">
                                        <img src="admin/public/img/gambar_layanan/<?= $layanan['gambar'] ?>" class="card-img-top" alt="..." style="max-height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $layanan['judul'] ?></h5>
                                            <p class="card-text"><?= $layanan['isi'] ?></p>
                                            <a href="#" class="btn btn-outline-secondary">Call Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>


                    </div>
                    <!-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> -->
                    <div class="swiper-pagination3"></div>
                </div>


            </div>
        </div>
    </div>
    <!-- kontak -->
    <div class="container mb-5 mt-5 bg-light p-4 rounded" id="kontak">

        <h3 class="mb-5 text-center fw-bold">Kontak Kami</h3>

        <div class="row">
            <div class="col-lg-6 col-12 d-lg-block d-none">
                <div class="card bg-transparent border-0 d-flex">
                    <img src="asset/img/ccs.png" alt="" class="w-75 ms-lg-5">
                </div>
            </div>
            <div class="col-lg-6 col-12 ">
                <div class="card border-0 bg-transparent">

                    <iframe class="card-img-top" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.666676895841!2d106.77885991427468!3d-6.5636900952528405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5a73b404239%3A0x4a544ea4094a2ed4!2sPT%20WAN%20Teknologi%20Internasional%20-%20Jasa%20Web%2C%20Aplikasi%20Android%2C%20ios%20di%20Bogor%2C%20Jakarta%2C%20Bekasi!5e0!3m2!1sid!2sid!4v1667200753424!5m2!1sid!2sid" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-12 text-lg-start text-center mb-3">
                                <a href="mailto:<?= $media['email'] ?>" class="link-secondary text-decoration-none m-2"><i class="fa-sharp fa-solid fa-envelope"></i>&nbsp;Gmail</a>
                            </div>
                            <div class="col-lg-6 col-12 text-lg-start text-center mb-3">
                                <a href="whatsapp://send?text=&phone=+62<?= substr($media['no_whatsapp'], 1, 15); ?>" class="link-secondary text-decoration-none m-2"><i class="fa-brands fa-whatsapp"></i>&nbsp;Whatsapp</a>
                            </div>
                            <div class="col-lg-6 col-12 text-lg-start text-center mb-3">
                                <a href="<?= $media['url_instagram'] ?>" class="link-secondary text-decoration-none m-2"><i class="fa-brands fa-instagram"></i>&nbsp;Instagram</a>
                            </div>
                            <div class="col-lg-6 col-12 text-lg-start text-center mb-3">
                                <a href="<?= $media['url_facebook'] ?>" class="link-secondary text-decoration-none m-2"><i class="fa-brands fa-facebook"></i>&nbsp;Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
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

        var swiper2 = new Swiper(".mySwiper2", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
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
                delay: 4000,
            },
        });

        var swiper3 = new Swiper(".mySwiper3", {
            slidesPerView: 1,
            spaceBetween: 30,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination3",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next3",
                prevEl: ".swiper-button-prev3",
            },
            autoplay: {
                delay: 4000,
            },
        });
        var swiper4 = new Swiper(".mySwiper4", {
            slidesPerView: 2,
            spaceBetween: 30,
            slidesPerGroup: 2,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination4",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next4",
                prevEl: ".swiper-button-prev4",
            },
            autoplay: {
                delay: 3000,
            },
        });
    </script>

</body>

</html>
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
                        <a class="nav-link hover " href="tutorial.php">Tutorial</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link active " href="">Tips dan trik</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link hover " href="index.php#kontak">Hubungi Kami</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>





    <div class="container-sm mb-5 mt-5" id="tutorial">
        
            <table id="data" class="w-100">
                <?php 
                $sql = mysqli_query($conect, "SELECT * FROM tb_tipsdantrik ORDER BY tgl DESC");
                while($row = mysqli_fetch_assoc($sql)){
                ?>
                    <tr>
                        <td>
                            <div class="card">  
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['judul'] ?></h5>
                                    <p class="card-text"><?= substr($row['isi'],0,180) ?></p>
                                    <a href="#" class="btn btn-secondary">Go somewhere</a>
                                </div>
                                <h6 class="card-footer"><?= $row['tgl'] ?></h6>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        

    </div>






    <!-- footer -->
    <?php
    include_once "pages/footer.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
    <script>
        $(document).ready(function() {
            $('#data').after('<div id="nav"></div>');
            var rowsShown = 4;
            var rowsTotal = $('#data tbody tr').length;
            var numPages = rowsTotal / rowsShown;
            for (i = 0; i < numPages; i++) {
                var pageNum = i + 1;
                $('#nav').append('<a href="#" class="btn btn-outline-secondary badge mt-2" rel="' + i + '">' + pageNum + '</a> ');
            }
            $('#data tbody tr').hide();
            $('#data tbody tr').slice(0, rowsShown).show();
            $('#nav a:first').addClass('active');
            $('#nav a').bind('click', function() {
                $('#nav a').removeClass('active');
                $(this).addClass('active');
                var currPage = $(this).attr('rel');
                var startItem = currPage * rowsShown;
                var endItem = startItem + rowsShown;
                $('#data tbody tr').css('opacity', '0.0').hide().slice(startItem, endItem).
                css('display', 'table-row').animate({
                    opacity: 1
                }, 300);
            });
        });
    </script>

    <script>
        $('#pagination-demo').twbsPagination({
            totalPages: 35,
            visiblePages: 7,
            onPageClick: function(event, page) {
                $('#page-content').text('Page ' + page);
            }
        });
    </script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="admin/plugins/jquery/jquery.min.js"></script>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .mySlides {
            display: none;
        }
        .cursor {
            cursor: pointer;
        }
        .active,
        .demo:hover {
            opacity: 1;
        }
        .demo {
            opacity: 0.6;
        }
    </style>
</head>
<body>
    <!-- header -->
    <?php echo file_get_contents('../templates/header.php') ?>

    <!-- halaman beranda -->
    <div class="container-fluid py-5 py-md-5 px-5 px-md-4" style="background: linear-gradient(to right, rgba(83,100,186,1), rgba(177,181,205,1))" id="beranda">
        <div class="row">
            <div class="col-lg-5 ms-5 align-self-center">
                <h1 class="text-white fw-bold lh-base" style="font-size: 40px">Temukan Rumah Impianmu</h1>
                <h5 class="text-white mt-4 fw-bold" style="font-size: 20px">Sweet Home</h5>
                <ul class="list-unstyled small text-muted">
                    <li class="mb-2 text-white mt-3 fw-light" style="font-size: 20px">
                        Hadir untuk membantu kamu dalam menemukan rumah impian yang kamu dambakan dengan harga terjangkau namun berkualitas</li>
                </ul>
                <button class="btn text-light" style="background-color: #3649AC; align-s: end;">Temukan <i class="bi bi-chevron-right"></i></button> 
            </div>
            <div class="col-lg-6 mt-5" style="align-top: 100px;">
                <img src="../../../public/dist/img/img1.png" height="550px" width="675px" >
            </div>
        </div>
    </div>
    <!-- end halaman beranda -->

    <!-- halaman tentang -->
    <div class="container-fluid py-5 py-md-1 px-5 px-md-2" style="background: #c7ccea; height:755px" id="tentang">
        <div class="row">
            <div class="col-lg-6 mt-5 ms-5 mb-5 align-self-center">
                <div>
                    <img src="../../../public/dist/img/image 17.png" style="z-index: 0; position:absolute;">
                </div>
                <div class="position-relative">
                    <img src="../../../public/dist/img/image 18.png" style="z-index: 1; position:relative; left: 180px; top: 50px; bottom: 150px;">
                </div>
                <div>
                    <div class="ms-5 mt-5 align-self-center bg-white shadow p-5 mb-5 bg-body rounded" style="z-index: 1; position:absolute; height: 400px; left: 500px; right: 150px; top: 850px; bottom: 500px;">
                        <h5 class="mt-4 fw-bold text-center" style="font-size: 45px; color: #142271;">Sweet Home</h5>
                        <hr style="background-color: #000000; height: 2px;"></hr>
                        <ul class="list-unstyled small text-muted">
                            <li class="mb-2 text-black mt-3 fw-light text-center" style="font-size: 20px">
                                Sweet home merupakan perumahan yang mengambil konsep rumah sederhana namun mewah. 
                                Sweet home menghadirkan rumah impian semua orang dengan harga yang terjangkau namun berkualitas. 
                                Sweet home salah satu perumahan terpercaya dan terbesar di Yogyakarta, 
                                saat ini sweet home sudah tersebar di seluruh Yogyakarta.  
                            </li>              
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end halaman tentang -->

    <!-- halaman katalog -->
    <div class="container-fluid py-0 py-md-0 px-5 px-md-4 bg-white" id="katalog">
        <div class="row">
            <div class="col-lg-4 ms-5 align-self-center">
                <h1 class="fw-bold lh-base mt-5" style="font-size: 40px; color: #2F3868;">Kenapa Sweet Home Lebih Unggul?</h1>
                <ul class="list-unstyled small text-muted">
                    <li class="mb-2 text-black mt-3 fw-light" style="font-size: 15px">
                        Selama 12 tahun berdiri, Sweet Home telah memberikan rumah yang nyaman pada 
                        hampir 1000 keluarga yang ada di DIY. 
                        Dan telah menerima penghargaan lebih dari 5. 
                    </li>
                </ul>
                <button class="btn text-light" style="background-color: #3649AC; align-s: end;">Lihat Katalog <i class="bi bi-chevron-right"></i></button> 
            </div>
            <div class="col-lg-2 ms-5 mt-5 align-self-center">
                <img src="../../../public/dist/img/image 11.png" class="demo cursor" style="width: 50%" onclick="currentSlide(1)">
                <img src="../../../public/dist/img/image 16.png" class="demo cursor" style="width: 50%" onclick="currentSlide(2)">
                <img src="../../../public/dist/img/image 12.png" class="demo cursor" style="width: 50%" onclick="currentSlide(3)">
            </div>
            <div class="col-lg-4 ms-5 mt-5 align-self-center">
                <div class="mySlides">
                        <img src="../../../public/dist/img/image 11.png" style="width: 100%">
                </div> 
                <div class="mySlides">
                        <img src="../../../public/dist/img/image 16.png" style="width: 100%">
                </div> 
                <div class="mySlides">
                        <img src="../../../public/dist/img/image 12.png" style="width: 100%">
                </div> 
            </div>
        </div>
    </div>

    <!-- end halaman katalog -->

    <!-- footer -->
    <?php echo file_get_contents('../templates/footer.php') ?>
    <!-- end footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
    
</body>
</html>
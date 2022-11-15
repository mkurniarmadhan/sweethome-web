<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- header -->
    <?php echo file_get_contents('../templates/header.php') ?>

    <!-- halaman beranda -->
    <div class="container-fluid py-0 py-md-0 px-5 px-md-4" style="background: linear-gradient(to right, rgba(83,100,186,1), rgba(177,181,205,1))">
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
            <div class="col-lg-5 mt-5 align-self-end">
                <img src="../../../public/dist/img/img1.png" height="495px" width="674px">
            </div>
        </div>
    </div>
    <!-- end halaman beranda -->
    <div class="container-fluid py-5 py-md-0 px-5 px-md-2" style="background: #c7ccea">
        <div class="row">
            <div class="col-lg-6 mt-5 ms-5 align-self-center">
                <div class="image1">
                    <img src="../../../public/dist/img/image 17.png" style="z-index: 0; position:absolute;">
                </div>
                <div class="image2 positio-relative">
                    <img src="../../../public/dist/img/image 18.png" style="z-index: 1; position:relative; left: 180px; top: 50px; bottom: 100px;">
                </div>
            </div>
            <div class="col-lg-4 ms-5 align-self-center">
                <h1 class="text-white fw-bold lh-base" style="font-size: 40px">Temukan Rumah Impianmu</h1>
                <h5 class="text-white mt-4 fw-bold" style="font-size: 20px">Sweet Home</h5>
                <ul class="list-unstyled small text-muted">
                    <li class="mb-2 text-white mt-3 fw-light" style="font-size: 20px">
                        Hadir untuk membantu kamu dalam menemukan rumah impian yang kamu dambakan dengan harga terjangkau namun berkualitas</li>
                </ul>
                <button class="btn text-light" style="background-color: #3649AC; align-s: end;">Temukan <i class="bi bi-chevron-right"></i></button> 
            </div>
        </div>
    </div>
    <!-- halaman tentang -->
    <!-- end halaman tentang -->

    <!-- footer -->
    <?php echo file_get_contents('../templates/footer.php') ?>
    
</body>
</html>
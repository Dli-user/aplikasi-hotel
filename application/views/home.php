<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Hotel Hebat</title>
</head>

<body>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Hotel Hebat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('home') ?>">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('layanan') ?>">Layanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="heroes py-5">
        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-6 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-6 p-2 p-lg-5 pt-lg-5">
                    <div class="" data-aos="zoom-in" data-aos-duration="2000">
                        <h1 class="text-black"><strong>Hotel Hebat Banguntapan Bantul Yogyakarta</strong></h1>
                        <p class="lead">Penginapan Hotel Hebat Terbaik di Jogja, Jl. Raya Janti Jl. Wonocatur,
                            Wonocatur,
                            Banguntapan,
                            Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55198</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Info
                                Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 p-3 overflow-hidden shadow-lg">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo base_url() ?>assets/img/foto3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url() ?>assets/img/foto4.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url() ?>assets/img/foto5.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner-->
    <section class="content bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h1 class="text-center"><b>Fasilitas Utama</b></h1>
                    <p class="text-center">
                    </p>
                    <p class="text-center">Disini Hotel Hebat menyediakan beberapa fasilitas utama seperti dibawah
                        ini
                    </p>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <?php foreach ($data_fasilitashotel as $value) { ?>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="<?php echo base_url() . $value['gambar'] ?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <h4 class="card-text"><?php echo $value['nama_fasilitas_hotel']; ?></h4>
                                <div class="caption">
                                    <p><?php echo $value['keterangan']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </section>

    <div class="overview py-5 " id="overview">
        <div class="container">
            <div class="row">
                <h1 class="text-center mb-3"><strong>Overview</strong></h1>
                <p class="text-center mb-4">Disini Hotel Hebat memberikan beberapa sampel kamar<br>
                    dan beberapa tampilan isi dalam kamar
                </p>
            </div>
            <div class="row">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img src="<?php echo base_url() ?>assets/img/foto4.jpg" class="d-block w-100 shadow"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block text-white">
                                <h5 class="">Kamar Reguler</h5>
                                <p>Tipe kamar hotel ini biasanya memiliki ukuran kasur yang besar seperti king
                                    size.
                                    Double room ini cocok banget buat pasangan suami istri yang ingin berbulan
                                    madu.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="<?php echo base_url() ?>assets/img/foto7.jpg" class="d-block w-100 shadow"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block text-white">
                                <h5 class="">Kamar Reguler</h5>
                                <p>Tipe kamar hotel ini biasanya memiliki ukuran kasur yang besar seperti king
                                    size.
                                    Double room ini cocok banget buat pasangan suami istri yang ingin berbulan
                                    madu.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="<?php echo base_url() ?>assets/img/foto1.jpg" class="d-block w-100 shadow"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block text-white">
                                <h5 class="">Kamar Duluxe</h5>
                                <p>Tersedia pilihan kasur yang bisa kamu pilih, double bed atau twin bed.
                                    Biasanya,
                                    dari segi interior kamar ini terkesan lebih mewah. Dan berisi Fasilitas -
                                    fasilitas Mewah.
                                </p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <footer class="text-center btn-dark" id="contact">
        <div class="container">
            <div class="row pt-3 justify-content-around">
                <div class="col-md-4">
                    <a class="me-3" href="">Instagram</a>
                    <a class="me-3" href="">Facebook</a>
                    <a class="me-3" href="">WhatsApp</a>
                </div>
                <div class="col-md-4">
                    <p>Copyright &copy; Dlies. All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
</body>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>
</body>

</html>
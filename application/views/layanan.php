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
    <hr>


    <section class="content py-5" id="">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h1 class="text-center"><b>Layanan Kami</b></h1>
                    <p class="text-center">Kami menyediakan layanan-layanan seperti dibawah ini:</p>
                </div>
                <div class="row row-cols-1 row-cols-md-2 g-4">

                    <?php foreach ($data_tipe_kamar as $value) { ?>

                    <div class="col">
                        <div class="card">
                            <img src="<?php echo base_url() . $value['gambar'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title mb-3"><?php echo $value['nama_kamar_tipe'] ?></h5>
                                <p class="card-text"><?php echo $value['fasilitas'] ?></p>

                                <!-- Modal -->
                                <a href="<?php echo base_url('datadiri') ?>" class="btn btn-outline-dark">
                                    Pesan Sekarang!
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

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
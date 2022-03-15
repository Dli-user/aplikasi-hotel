<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css">

    <title>Hotel Crimson</title>
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
                        <a class="nav-link" href="#contact">Hubungi</a>
                    </li>
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
    <hr>
    <hr>
    <div class="box py-5">
        <div class="container">
            <div class="alert alert-primary text-center" role="alert">
                <h4><strong>Masukkan Data Diri anda terlebih dahulu</strong></h4>
            </div>
            <form method="post" action="<?php echo base_url('tamu/simpan') ?>">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK...">
                        </div>
                        <div class="mb-3">
                            <label for="nama_depan" class="form-label">Nama Depan</label>
                            <input type="text" class="form-control" name="nama_depan"
                                placeholder="Masukkan nama depan...">
                        </div>
                        <div class="mb-3">
                            <label for="nama_belakang" class="form-label">Nama Belakang</label>
                            <input type="text" class="form-control" name="nama_belakang"
                                placeholder="Masukkan nama belakang...">
                        </div>
                        <div class="mb-3">
                            <label for="tipe_identitas" class="form-label">Tipe Identitas</label>
                            <select class="form-control" style="width: 100%;" name="tipe_identitas">
                                <option selected="selected">- Pilih -</option>
                                <option value="KTP">KTP</option>
                                <option value="SIM">SIM</option>
                                <option value="Passport">Passport</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_identitas" class="form-label">Nomor Identitas</label>
                            <input type="text" class="form-control" name="nomor_identitas"
                                placeholder="Masukkan nomor identitas...">
                        </div>
                        <div class="mb-3">
                            <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                            <select class="form-control" style="width: 100%;" name="kewarganegaraan">
                                <option selected="selected">- Pilih -</option>
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat...">
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No HP</label>
                            <input type="text" class="form-control" name="no_hp" placeholder="Masukkan nomor hp...">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Masukkan email...">
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_in" class="form-label">Tanggal In</label>
                            <input type="date" class="form-control" name="tanggal_in">
                        </div>
                        <div class="mb-3">
                            <label for="jam_in" class="form-label">Jam In</label>
                            <input type="time" class="form-control" name="jam_in">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_out" class="form-label">Tanggal Out</label>
                            <input type="date" class="form-control" name="tanggal_out">
                        </div>
                        <div class="mb-3">
                            <label for="jam_out" class="form-label">Jam Out</label>
                            <input type="time" class="form-control" name="jam_out">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary py-1">Pesan sekarang</button>
            </form>
        </div>
    </div>


    <script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
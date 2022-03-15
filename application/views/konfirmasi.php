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

    <!-- table -->
    <div class="sukses-simpan text-center py-5">
        <div class="container" data-aos="zoom-in" data-aos-duration="2000">
            <div class="alert alert-success" role="alert">
                Data Reservasi dan Data Tamu Berhasil Disimpan
            </div>
        </div>
    </div>
    <div class="container py-2">
        <div class="row justify-content-center">
            <div class="alert alert-primary text-center col-8" role="alert">
                <h2><strong>KONFIRMASI</strong></h2>
                <p>Silahkan Screenshot hasil konfirmasi sebagai bukti telah melakukan reservasi kamar</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table table-bordered border-primary">
                    <tbody>
                        <tr>
                            <td><strong>NIK</strong></td>
                            <td><?php echo $konfirmasi_booking['nik']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Kode Booking</strong></td>
                            <td><?php echo $konfirmasi_booking['kode_booking']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Nama Lengkap</strong></td>
                            <td><?php echo $konfirmasi_booking['nama_depan'] . " " . $konfirmasi_booking['nama_belakang'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Tipe Identitas</strong></td>
                            <td><?php echo $konfirmasi_booking['tipe_identitas']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Nomor Identitas</strong></td>
                            <td><?php echo $konfirmasi_booking['nomor_identitas']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Kewarganegaraan</strong></td>
                            <td><?php echo $konfirmasi_booking['kewarganegaraan']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Alamat</strong></td>
                            <td><?php echo $konfirmasi_booking['alamat']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>No HP</strong></td>
                            <td><?php echo $konfirmasi_booking['no_hp']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td><?php echo $konfirmasi_booking['email']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Tanggal In</strong></td>
                            <td><?php echo $konfirmasi_booking['tanggal_in']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Jam In</strong></td>
                            <td><?php echo $konfirmasi_booking['jam_in']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Tanggal Out</strong></td>
                            <td><?php echo $konfirmasi_booking['tanggal_out']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Jam Out</strong></td>
                            <td><?php echo $konfirmasi_booking['jam_out']; ?></td>
                        </tr>
                    </tbody>
                    </thead>
                </table>
                <a href="<?php echo base_url('home') ?>" class="btn btn-outline-primary">
                    Kembali
                </a>
            </div>
        </div>
    </div>

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
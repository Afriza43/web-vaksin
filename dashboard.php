<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$no_reg = $_SESSION["no_reg"];
$tabel = query("SELECT * FROM daftar WHERE no_reg = '$no_reg'");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">

</head>

<body>
    <ul class="topnav container-fluid" style="margin-bottom: 0px;">
        <img style="float:left; height:120px; padding:20px;" src="gambar/logo-sleman.png" alt="user"></a>
        <div class="inner">
            <li><a href="logout.php"><button type="button" class="btn btn-primary">Log Out</button></a></li>
            <li><a href="pelaksanaan.php">Pelaksanaan</a></li>
            <li><a href="dashboard.php"><strong>Dashboard</strong></a></li>
            <li><a href="daftar.php">Daftar</a></li>
            <li style="float:left"><a href="home.php">Home</a></li>
        </div>
    </ul>

    <div class="jumbotron botron" style="background-image:url('gambar/vaccinee.png'); background-size:cover; height: 630px; text-align:left; padding:50px;
    color:white">
        <div class="container transparent-bg" style="color:white; text-align:center; padding-top:12%;;">
            <h1 class="display-4"><strong>AYO, DAFTAR VAKSIN!</strong></h1>
            <br>
            <a href="daftar.php" class="btn btn-primary">Daftar</a>
        </div>
    </div>

    <div class="inner box">
        <div class="card-body">
            <div class="alert" style=" background-color: #1E4478; color:white;">
                <h3 class="text-center" id="status">Status Pendaftaran</h3>
            </div>
            <table class="table">
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Waktu</th>
                    <th>Hari</th>
                    <th>Tanggal</th>
                    <th>Tempat</th>
                    <th>Kartu</th>
                    <th>Aksi</th>
                </thead>
                <?php $i = 1; ?>
                <?php foreach ($tabel as $data) : ?>
                    <tbody>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $data["nama"]; ?></td>
                        <td><?= $data["jenis_kelamin"]; ?></td>
                        <td><?= $data["jam"]; ?></td>
                        <td><?= $data["hari"]; ?></td>
                        <td><?= $data["tgl"]; ?></td>
                        <td><?= $data["tempat"]; ?></td>
                        <td><a href="cetak.php?no_antrian=<?= $data["no_antrian"]; ?>"><button type="button" class="button1 btn-primary btn-sm">Cetak</button></a></td>
                        <td><a href="hapus.php?no_antrian=<?= $data["no_antrian"]; ?>"><button type="button" class="button1 btn-danger btn-sm">Cancel</button></a>
                            <a href="ubah.php?no_antrian=<?= $data["no_antrian"]; ?>"><button type="button" class="button1 btn-success btn-sm">Ubah</button></a>
                        </td>
                    </tbody>
                <?php $i++;
                endforeach; ?>
            </table>
        </div>
    </div>

    <br><br><br>
    <div class="card mb-3" style="margin:50px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://foto.kontan.co.id/SVv0t6ZjJ-ZL7yUfTZ7Hw6_MTdE=/smart/2022/01/19/1270518099p.jpg" class="img-fluid rounded-start" alt="sinovac-booster">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Kemenkes Siapkan Sinovac Sebagai Vaksin Booster</h5>
                    <p class="card-text">Kementerian Kesehatan (Kemenkes) membuka peluang untuk menjadikan vaksin Sinovac sebagai
                        vaksin dosis ketiga atau booster. Hal itu, disampaikan Juru Bicara Vaksinasi Kemenkes Siti Nadia Tarmizi
                        menanggapi putusan Mahkamah Agung (MA) yang meminta pemerintah memastikan kehalalan vaksin Covid-19.
                        "Kami menghormati putusan Mahkamah Agung Nomor 31P/HUM/2022 untuk melakukan penyediaan vaksin halal dalam program
                        vaksinasi nasional," ujar Nadia dalam keterangan...</p>
                    <p class="card-text"><small class="text-muted">Senin, 25 April 2022 / 22:48 WIB</small></p>
                    <a href="https://nasional.kontan.co.id/news/kemenkes-siapkan-sinovac-sebagai-vaksin-booster" class="btn btn-primary">Telusuri</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3" style="margin:50px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/ilustrasi-vaksinasi-ilustrasi-suntik-vaksin.jpg" class="img-fluid rounded-start" alt="ilustrasi-vaksinasi-ilustrasi-suntik-vaksin">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Kementerian Kesehatan Hormati Putusan MA terkait Pemenuhan Vaksin Halal di Indonesia</h5>
                    <p class="card-text">Kementerian Kesehatan (Kemenkes RI) menghormati putusan Mahkamah Agung (MA) yang mewajibkan pemerintah
                        menyediakan vaksin Covid-19 halal.
                        Juru Bicara Vaksinasi Covid-19 Siti Nadia Tarmizi mengatakan, pihaknya membuka peluang vaksin Sinovac
                        dapat menjadi booster agar masyarakat...</p>
                    <p class="card-text"><small class="text-muted">Senin, 25 April 2022 / 19:50 WIB</small></p>
                    <a href="https://www.tribunnews.com/corona/2022/04/25/kementerian-kesehatan-hormati-putusan-ma-terkait-pemenuhan-vaksin-halal-di-indonesia" class="btn btn-primary">Telusuri</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3" style="margin:50px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://images.bisnis-cdn.com/posts/2022/04/25/1527136/booster3.jpg" class="img-fluid rounded-start" alt="2022/04/25/1527136/booster3">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">YKMI Sebut Hanya Tiga Jenis Vaksin yang Dapatkan Sertifikasi Halal</h5>
                    <p class="card-text">Yayasan Konsumen Muslim Indonesia (YKMI) memastikan sejauh ini hanya tiga jenis vaksin yang sudah
                        mendapatkan sertifikasi halal, yakni Sinovac, Zivifax dan vaksin Merah Putih. Direktur Eksekutif YKMI, Ahmad Himawan
                        mengatakan dirinya belum mendapatkan informasi jenis vaksin yang lainnya, selain ketiga vaksin yang disebutkan sebelumnya.
                        “Sependek pengetahuan saya hanya tiga jenis vaksin halal. Pertama, Sinovac. Kedua, Zivifax dan yang terakhir...</p>
                    <p class="card-text"><small class="text-muted">Senin, 25 April 2022 / 17:08 WIB</small></p>
                    <a href="https://kabar24.bisnis.com/read/20220425/15/1527136/ykmi-sebut-hanya-tiga-jenis-vaksin-yang-dapatkan-sertifikasi-halal" class="btn btn-primary">Telusuri</a>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
    <div class="footer">
        <div class="inner">
            <h3>DINAS KESEHATAN KABUPATEN SLEMAN</h3>
            <li>Jalan Roro Jonggrang No. 6, Beran, Tridadi, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55511, Indonesia</li>
            <li>Telepon : (0274) 868409</li>
            <div class="foot">
                <hr>
                <li>124210043-Afriza Meidio Andhana</li>
                <li>124210046-Rahmawati Dwi Augustin</li>
            </div>
        </div>
    </div>


</body>

</html>
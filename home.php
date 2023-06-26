<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <title>HOME</title>
</head>

<body>
    <ul class="topnav container-fluid" style="margin-bottom: 0px;">
        <img style="float:left; height:120px; padding:20px;" src="gambar/logo-sleman.png" alt="user"></a>
        <div class="inner">
            <li><a href="logout.php"><button type="button" class="btn btn-primary">Log Out</button></a></li>
            <li><a href="pelaksanaan.php">Pelaksanaan</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="daftar.php">Daftar</a></li>
            <li style="float:left"><a href="home.php"><strong>Home</strong></a></li>
        </div>
    </ul>

    <div class="jumbotron botron" style="height: 630px; text-align:left; padding:50px; 
    color:white">
        <div class="container transparent-bg" style="color:white; text-align:center; padding-top:12%; padding-left:60pt;">
            <h1 class="display-6"><strong>Welcome to</strong></h1>
            <h1 class="display-4"><strong>Web Vaksinasi Booster</strong></h1>
            <h1 class="display-6"><strong>Kabupaten Sleman</strong></h1>
            <br>
            <a href="dashboard.php" class="btn btn-primary">Dashboard</a>
        </div>
    </div>

    <div class="main" id="home">
        <img class="ilustras1" src="gambar/ilus1.png" alt="ilustrasi.01">
        <H2>INFORMASI SEPUTAR VAKSINASI BOOSTER</H2>
        <p>Dalam Surat Edaran terbaru Kemenkes bernomor SR.02.06/II/408/2022 tentang Penyesuaian Pelaksanaan Vaksinasi Covid-19 Dosis Lanjutan (Booster) disebutkan mekanisme pemberian jenis dan kombinasi vaksin ketiga atau vaksin booster.
            Berikut jenis vaksin ke 3 atau booster yang akan diberikan kepada masyarakat umum :</p>
        <li>Vaksin primer Sinovac: vaksin booster setengah dosis Pfizer (0,15 ml)</li>
        <li>Vaksin primer Sinovac: vaksin booster setengah dosis AstraZeneca (0,25 ml)</li>
        <li>Vaksin primer AstraZeneca: vaksin booster setengah dosis Moderna (0,25 ml)</li>
        <li>Vaksin primer AstraZeneca: vaksin booster setengah dosis Pfizer (0,15 ml)</li>
        <li>Vaksin primer AstraZeneca: vaksin booster dosis penuh AstraZeneca (0,5 ml)</li>
    </div>
    <hr class="line">
    <div class="main">
        <img class="ilust2asi" src="gambar/ilus2.png" alt="ilustrasi.02">
        <div class="plus2">
            <h2>SYARAT MENERIMA VAKSIN BOOSTER</h2>
            <p>Jenis dan kombinasi nama vaksin ke 3 sudah diketahui, kini ketahui pula siapa saja yang diizinkan
                untuk mendapatkan vaksin ketiga atau booster ini. Mengacu pada SE Kemenkes RI Nomor HK.02.02/II/252/2002 tentang
                Vaksinasi COVID-19 Dosis Lanjutan (Booster), disebutkan ada sejumlah syarat bagi penerima vaksin booster.
                Berikut syarat penerima vaksin booster, di antaranya:
            </p>
        </div>
        <ul>
            <li>Calon penerima vaksin harus menunjukkan NIK dengan membawa KTP/KK atau melalui aplikasi PeduliLindungi.</li>
            <li>Berusia 18 tahun ke atas.</li>
            <li>Telah mendapatkan vaksinasi primer dosis lengkap minimal 3 bulan sebelumnya.</li>
            <li>Ibu hamil juga bisa mendapatkan vaksinasi booster dengan jenis vaksin Pfizer atau Moderna sesuai dengan aturan yang ditetapkan.</li>
        </ul>
    </div>

    <div class="yt">
        <li><iframe width="250" height="140" src="https://www.youtube.com/embed/2W8cXACB36A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="250" height="140" src="https://www.youtube.com/embed/fO4ViMN9B-I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="250" height="140" src="https://www.youtube.com/embed/xf0oSCUz-us" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="250" height="140" src="https://www.youtube.com/embed/1H2sYTjpCs4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </li>
    </div><br><br><br>

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
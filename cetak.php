<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$no = $_GET["no_antrian"];
$data = cetak("SELECT * FROM daftar WHERE no_antrian = '$no'")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
    <style>
        h3 {
            color: white;
            font-family: Quicksand;
        }

        h4 {
            font-size: 16pt;
        }

        h5 {
            font-size: 15pt;

        }

        .sleman {
            align-items: center;
            align-content: center;
        }

        .logo {
            margin-left: 5pt;
            margin-top: 15pt;
            margin-right: 10pt;
            margin-bottom: 10pt;
            height: 100px;
            float: left;
        }

        .box {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
            border-radius: 5px;
        }
    </style>
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
    </ul><br><br>


    <div class="container box">
        <div class="container">
            <img class="logo" src="gambar/logo-sleman.png" alt="logo-sleman">
            <h5><br>DINAS KESEHATAN</h5>
            <h5>KABUPATEN</h5>
            <h5>SLEMAN</h5>
        </div>
        <div class="card-body ">
            <div class="alert" style=" background-color: #1E4478;">
                <h3 class=" text-center">KARTU VAKSINASI</h3>
                <h3 class=" text-center">COVID-19</h3>
            </div>
            <div class="card-body ">
                <div class="row justify-content-md-center">
                    <div class="form-group row mb-2">
                        <h4 class="col-md-2" for="no_antrian">No.Antrian</h4>
                        <h4 class="col-md-1" for="no_antrian">:</h4>
                        <div class="col-md-6">
                            <h4><?= $data["no_antrian"]; ?></h4>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <h4 class="col-md-2" for="nik">NIK</h4>
                        <h4 class="col-md-1" for="nik">:</h4>
                        <div class="col-md-6">
                            <h4><?= $data["nik"]; ?></h4>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <h4 class="col-md-2" for="nama">Nama</h4>
                        <h4 class="col-md-1" for="nama">:</h4>
                        <div class="col-md-6">
                            <h4><?= $data["nama"]; ?></h4>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <h4 class="col-md-2" for="jenis_kelamin">Jenis Kelamin</h4>
                        <h4 class="col-md-1" for="jenis_kelamin">:</h4>
                        <div class="col-md-6">
                            <h4><?= $data["jenis_kelamin"]; ?></h4>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <h4 class="col-md-2" for="waktu">Waktu</h4>
                        <h4 class="col-md-1" for="waktu">:</h4>
                        <div class="col-md-6">
                            <h4><?= $data["hari"]; ?>, <?= $data["tgl"]; ?></h4>
                        </div>
                    </div>

                    <div class="form-group row mb-2">
                        <h4 class="col-md-2" for="tempat">Lokasi Vaksinasi</h4>
                        <h4 class="col-md-1" for="tempat">:</h4>
                        <div class="col-md-6">
                            <h4><?= $data["tempat"]; ?></h4>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <h4 class="col-md-2" for="no_telp">No.HP</h4>
                        <h4 class="col-md-1" for="no_telp">:</h4>
                        <div class="col-md-6">
                            <h4><?= $data["no_telp"]; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>
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
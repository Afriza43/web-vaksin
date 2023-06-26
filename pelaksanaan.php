<?php

session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$tabel = query("SELECT * FROM jadwal");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pelaksanaan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="dashboard.css">
  <style>
    .box {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      border-radius: 5px;
    }
  </style>
</head>

<body>
<ul class="topnav container-fluid" style="margin-bottom: 0px;">
    <img style="float:left; height:120px; padding:20px;" src="gambar/logo-sleman.png" alt="user"></a>
        <div class="inner">
            <li><a href="logout.php"><button type="button" class="btn btn-primary">Log Out</button></a></li>
            <li><a href="pelaksanaan.php"><strong>Pelaksanaan</strong></a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="daftar.php">Daftar</a></li> 
            <li style="float:left"><a href="home.php">Home</a></li>
        </div>
    </ul>
  <div class="container mt-5">
    <div class="inner box">
      <h1 class="text-center mb-4">Pelaksanaan Vaksinasi Kabupaten Sleman</h1>
      <p class="text-center alert alert-warning" style="color:red;"><em>*Tidak berlaku pada hari libur</em></p>
      <table class="table">
        <thead>
          <th>No</th>
          <th>Puskesmas</th>
          <th>Jam</th>
          <th>Hari Operasi</th>
          <th>Jenis Vaksin</th>
        </thead>
        <?php $i = 1; ?>
        <?php foreach ($tabel as $data) : ?>
          <tbody>
            <th scope="row"><?= $i ?></th>
            <td><?= $data["nama_faskes"]; ?></td>
            <td><?= $data["jam"]; ?></td>
            <td><?= $data["hari"]; ?></td>
            <td><?= $data["jenis_vaksin"]; ?></td>
          </tbody>
        <?php $i++;
        endforeach; ?>
      </table>
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
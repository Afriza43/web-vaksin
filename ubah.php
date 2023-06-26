<?php

session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

//ambil data
$no = $_GET["no_antrian"];

//query data mahasiswa berdasarkan no_antrian
$data = query("SELECT * FROM daftar WHERE no_antrian = $no")[0];

if (isset($_POST["submit"])) {

  if (ubah($_POST) > 0) {
    echo "
    <script>
    alert('Data berhasil diubah');
    document.location.href = 'dashboard.php';
    </script>";
  } else {
    echo
    "<script>
    alert('Data gagal diubah');
    document.location.href = 'dashboard.php';
    </script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="dashboard.css">
  <style>
    h3 {
      color: white;
      font-family: Quicksand;
    }

    label,
    small {
      font-family: Quicksand;
    }

    .box {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      border-radius: 5px;
    }
  </style>
</head>

<body>
  <ul class="topnav container-fluid">
    <img style="float:left; height:120px; padding:20px;" src="gambar/logo-sleman.png" alt="user"></a>
    <div class="inner">
      <li><a href="login.php"><button type="button" class="btn btn-primary">Log Out</button></a></li>
      <li><a href="pelaksanaan.php">Pelaksanaan</a></li>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="daftar.php"><strong>Ubah</strong></a></li>
      <li style="float:left"><a href="home.php">Home</a></li>
    </div>
  </ul>

  <div class="container box mt-4">
    <div class="card-body">
      <div class="alert" style=" background-color: #1E4478;">
        <h3 class=" text-center">Ubah Data Vaksinasi</h3>
      </div>

      <form method="POST" action="">
        <input type="hidden" name="no_antrian" value="<?= $data["no_antrian"] ?>">
        <div class="form-group row mb-2">
          <label class="col-md-2" for="nik">NIK</label>
          <div class="col-md-10">
            <input type="text" class="form-control " id="nik" placeholder="Masukkan NIK" name="nik" required value="<?= $data["nik"] ?>" required>
          </div>
        </div>
        <div class="form-group row mb-2">
          <label class="col-md-2" for="nama">Nama</label>
          <div class="col-md-10">
            <input type="text" class="form-control " id="nama" placeholder="Masukkan Nama" name="nama" value="<?= $data["nama"] ?>" required>
          </div>
        </div>

        <div class="form-group row mb-2">
          <label class="col-md-2" for="jenis_kelamin">Jenis Kelamin</label>
          <div class="col-md-4">
            <select class="form-control " id="jenis_kelamin" placeholder="Pilih.." name="jenis_kelamin" required>
              <option value="">Pilih..</option>
              <option value="Laki-Laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>

        <div class="form-group row mb-2">
          <label class="col-md-2" for="jam">Waktu</label>
          <div class="col-md-4">
            <select class="form-control " id="jam" name="jam" required>
              <option value="08.00-11.00">08.00-11.00</option>
            </select>
          </div>

          <label class="col-md-2" for="hari">Hari</label>
          <div class="col-md-4">
            <select name="hari" id="hari" class="form-control " required>
              <option value="">Pilih Hari...</option>

              <option value="Senin">Senin</option>

              <option value="Selasa">Selasa</option>

              <option value="Rabu">Rabu</option>

              <option value="Kamis">Kamis</option>

              <option value="Jumat">Jumat</option>
            </select>
          </div>
        </div>

        <div class="form-group row mb-2">
          <label class="col-md-2" for="tgl">Tanggal</label>
          <div class="col-md-4">
            <input type="date" class="form-control " id="tgl" name="tgl" value="<?= $data["tgl"] ?>" required>
          </div>



          <label class="col-md-2" for="tempat">Tempat</label>
          <div class="col-md-4">
            <select name="tempat" id="tempat" class="form-control " required>
              <option value="">Pilih Puskesmas...</option>

              <option value="Puskesmas Moyudan">Puskesmas Moyudan</option>

              <option value="Puskesmas Godean">Puskesmas Godean</option>

              <option value="Puskesmas Minggir">Puskesmas Minggir</option>

              <option value="Puskesmas Seyegan">Puskesmas Seyegan</option>

              <option value="Puskesmas Ngaglik">Puskesmas Ngaglik</option>

              <option value="Puskesmas Depok">Puskesmas Depok</option>

              <option value="Puskesmas Kalasan">Puskesmas Kalasan</option>

              <option value="Puskesmas Turi">Puskesmas Turi</option>

              <option value="Puskesmas Berbah">Puskesmas Berbah</option>

              <option value="Puskesmas Pakem">Puskesmas Pakem</option>

            </select>
          </div>
        </div>


        <div class="form-group row mb-2">
          <label class="col-md-2" for="no_telp">No HP</label>
          <div class="col-md-10">
            <input type="text" class="form-control " id="no_telp" name="no_telp" placeholder="Masukkan No.HP" value="<?= $data["no_telp"] ?>" required>
            <small>Jika tidak punya HP, silahkan menggunakan No HP Keluarga atau Kerabat yg dapat di hubungi </small>
          </div>

          <div class="form-group row mb-2">
            <div class="col-md-1">
              <br>
              <button id="submit" name="submit" type="submit" class="btn" style="background: #1E4478; color: white;">Ubah</button>

            </div>
          </div>
        </div>
      </form>
    </div>
</body>

</html>
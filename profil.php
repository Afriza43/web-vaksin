<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST["submit"])) {

  if (profil($_POST) > 0) {
    echo "
    <script>
    alert('Update berhasil');
    document.location.href = 'dashboard.php';
    </script>";
  } else {
    echo
    "<script>
    alert('Update Gagal');
    document.location.href = 'profil.php';
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
  <title>Halaman</title>
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
    <div class="inner">
      <li><a href="login.php"><button type="button" class="btn btn-primary">Log Out</button></a></li>
      <li><a href="pelaksanaan.php">Pelaksanaan</a></li>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="daftar.php">Daftar</a></li>
      <li style="float:left"><a href="profil"><img class="icon" src="gambar/user.png" alt="user"></a></li>
      <li style="float:left"><a href="home.php">Home</a></li>
    </div>
  </ul>

  <div class="container box mt-4">
    <div class="card-body">
      <div class="alert" style=" background-color: #1E4478;">
        <h3 class=" text-center">Update Profil</h3>
      </div>

      <form method="POST" action="">
        <div class="form-group row mb-2">
          <label class="col-md-2" for="NIK">NIK</label>
          <div class="col-md-10">
            <input type="text" class="form-control " id="NIK" placeholder="Masukkan NIK" name="NIK" value="">
          </div>
        </div>

        <div class="form-group row mb-2">
          <label class="col-md-2" for="nama">Nama</label>
          <div class="col-md-10">
            <input type="text" class="form-control " id="nama" placeholder="Masukkan Nama" name="nama" value="">
          </div>
        </div>

        <div class="form-group row mb-2">
          <label class="col-md-2" for="gender">Jenis Kelamin</label>
          <div class="col-md-4">
            <select class="form-control " id="gender" placeholder="Pilih.." name="gender">
              <option value="">Pilih..</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>

        <div class="form-group row mb-2">
          <label class="col-md-2" for="umur">Umur</label>
          <div class="col-md-4">
            <input type="text" class="form-control " id="umur" placeholder="Masukkan Umur" name="umur" value="">
          </div>

          <label class="col-md-2" for="tgl_lahir">Tanggal Lahir</label>
          <div class="col-md-4">
            <input type="date" class="form-control " id="tgl_lahir" name="tgl_lahir" value="">
          </div>
        </div>

        <div class="form-group row mb-2">
          <label class="col-md-2" for="alamat">Alamat</label>
          <div class="col-md-4">
            <input type="text" class="form-control " id="alamat" placeholder="Masukkan Nama" name="alamat" value="">
          </div>


          <label class="col-md-2" for="kecamatan">Kecamatan</label>
          <div class="col-md-4">
            <select name="kecamatan" id="kecamatan" class="form-control ">
              <option value="">Pilih Kecamatan...</option>

              <option value="Kecamatan Moyudan">Kecamatan Moyudan</option>

              <option value="Kecamatan Godean">Kecamatan Godean</option>

              <option value="Kecamatan Minggir">Kecamatan Minggir</option>

              <option value="Kecamatan Seyegan">Kecamatan Seyegan</option>

              <option value="Kecamatan Ngaglik">Kecamatan Ngaglik</option>

              <option value="Kecamatan Depok">Kecamatan Depok</option>

              <option value="Kecamatan Kalasan">Kecamatan Kalasan</option>

              <option value="Kecamatan Turi">Kecamatan Turi</option>

              <option value="Kecamatan Berbah">Kecamatan Berbah</option>

              <option value="Kecamatan Pakem">Kecamatan Pakem</option>

            </select>
          </div>
        </div>


        <div class="form-group row mb-2">
          <label class="col-md-2" for="no_hp">No HP</label>
          <div class="col-md-10">
            <input type="text" class="form-control " id="no_hp" name="no_hp" placeholder="Masukkan No.HP" value="">
            <small>Jika tidak punya HP, silahkan menggunakan No HP Keluarga atau Kerabat yg dapat di hubungi </small>
          </div>

          <div class="form-group row mb-2">
            <div class="col-md-1">
              <br>
              <button id="submit" name="submit" type="submit" class="btn" style="background: #1E4478; color: white;">Simpan</button>

            </div>
          </div>
        </div>
      </form>
    </div>
</body>

</html>
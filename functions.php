<?php

$conn = mysqli_connect("localhost", "root", "", "vaksin");

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function daftar($vac)
{
  global $conn;

  $no = $_GET["no_antrian"];
  $nik = htmlspecialchars($vac["nik"]);
  $nama = htmlspecialchars($vac["nama"]);
  $gender = htmlspecialchars($vac["jenis_kelamin"]);
  $jam = htmlspecialchars($vac["jam"]);
  $hari = htmlspecialchars($vac["hari"]);
  $tgl = htmlspecialchars($vac["tgl"]);
  $tempat = htmlspecialchars($vac["tempat"]);
  $no_telp = htmlspecialchars($vac["no_telp"]);
  $no_reg = $_SESSION["no_reg"];


  $query = "INSERT INTO daftar VALUES 
              ('$no','$nik','$nama','$gender','$jam','$hari','$tgl','$tempat','$no_telp','$no_reg')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function registrasi($reg)
{
  global $conn;

  $username = strtolower(stripslashes($reg["username"]));
  $password = mysqli_real_escape_string($conn, $reg["password"]);
  $password2 = mysqli_real_escape_string($conn, $reg["password2"]);


  //cek user sudah terdaftar
  $result = mysqli_query($conn, "SELECT username FROM akun WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
  alert('User sudah ada');
  </script>";
    return false;
  }

  //konfirmasi password
  if ($password !== $password2) {
    echo "<script>
    alert('Password tidak cocok!');
    </script>";
    return false;
  }

  //enkripsi password

  $password = password_hash($password, PASSWORD_DEFAULT);
  $password2 = password_hash($password2, PASSWORD_DEFAULT);


  //tambah user
  mysqli_query($conn, "INSERT INTO akun VALUES('','$username','$password','$password2','')");

  return mysqli_affected_rows($conn);
}

function hapus($hps)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM daftar WHERE no_antrian = $hps");

  return mysqli_affected_rows($conn);
}

function pelaksanaan($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function ubah($vac)
{
  global $conn;

  $no = $vac["no_antrian"];
  $nik = htmlspecialchars($vac["nik"]);
  $nama = htmlspecialchars($vac["nama"]);
  $gender = htmlspecialchars($vac["jenis_kelamin"]);
  $jam = htmlspecialchars($vac["jam"]);
  $hari = htmlspecialchars($vac["hari"]);
  $tgl = htmlspecialchars($vac["tgl"]);
  $tempat = htmlspecialchars($vac["tempat"]);
  $no_telp = htmlspecialchars($vac["no_telp"]);

  $query = "UPDATE daftar SET 
              nik = '$nik',
              nama = '$nama',
              jenis_kelamin = '$gender',
              jam = '$jam',
              hari = '$hari',
              tgl = '$tgl',
              tempat = '$tempat',
              no_telp = '$no_telp'
              WHERE no_antrian = '$no'
              ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cetak($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

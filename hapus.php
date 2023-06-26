<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}


require 'functions.php';

$hps = $_GET["no_antrian"];

if (hapus($hps) > 0) {
  echo "
  <script>
  alert('Data berhasil dihapus');
  document.location.href = 'dashboard.php';
  </script>";
} else {
  echo
  "<script>
  alert('Data Gagal dihapus');
  document.location.href = 'dashboard.php';
  </script>";
}

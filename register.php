<?php

require 'functions.php';

if (isset($_POST["submit"])) {

  if (registrasi($_POST) > 0) {
    echo
    "<script>
    alert ('Anda berhasil terdaftar');
    document.location.href = 'login.php';
    </script>";
  } else {
    "<script>
    alert ('Anda belum terdaftar');
    </script>";
  }
}


if (isset($_POST["masuk"])) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Vaksinasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div class="container-fluid mt-0 pt-0">
    <div class="row">
      <section class="col-12">
        <div class="d-flex justify-content-center">
          <div class="col-xl-6 col-sm-8">
            <div class="card register">
              <div class="card-body">
                <div class="row justify-content-md-center">
                  <div class="col-md-10">
                    <form class="mt-3" method="POST" action="">
                      <div class="mb-3">
                        <h1 class="text-center sign-in">Sign Up</h1>
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Masukkan username" id="username" name="username" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" placeholder="Masukkan password" class="form-control" name="password">
                      </div>
                      <div class="mb-3">
                        <label for="password2" class="form-label">Konfirmasi Password</label>
                        <input type="password" id="password2" placeholder="Masukkan ulang password" class="form-control" name="password2">
                      </div>
                      <small style=" float: right;">*login jika sudah punya akun</small>
                      <br>
                      <button type="submit" id="submit" name="submit" class="btn">Register</button>
                      <button type="submit" id="masuk" name="masuk" class="btn" style=" float: right; ">Login</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</body>

</html>
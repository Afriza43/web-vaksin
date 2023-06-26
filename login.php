<?php
session_start();

require 'functions.php';

if (isset($_COOKIE['login']) && isset($_COOKIE['akun'])) {

  $login = $_COOKIE['login'];
  $name = $_COOKIE['akun'];

  //ambil username berdasarkan id
  $result = mysqli_query($conn, "SELECT usename FROM akun WHERE no_reg = $login");
  $row = mysqli_fetch_assoc($result);

  //cek cookie dan username
  if ($name === hash('sha256', $row['username'])) {
    $_SESSION['login'] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("Location: home.php");
  exit;
}

if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username'");

  //cek user ada/tidak
  if (mysqli_num_rows($result) === 1) {

    //cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {

      //set session password
      $_SESSION["login"] = true;

      $_SESSION["no_reg"] = $row["no_reg"];
      $_SESSION["gambar"] = $row["gambar"];
      $_SESSION["username"] = $username;

      //cek remember me
      if (isset($_POST["remember"])) {

        //buat cookie
        setcookie('login', $row['no_reg'], time() + 1800);
        setcookie('akun', hash('sha256', $row['username']), time() + 1800);
      }

      header("Location: home.php");
      exit;
    }
  }
  $error = true;
}

if (isset($_POST["regist"])) {
  header("Location: register.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div class="container-fluid mt-0 pt-0">
    <div class="row">
      <section class="col-12">
        <div class="d-flex justify-content-center">
          <div class="col-xl-6 col-sm-8">
            <div class="card masuk">
              <div class="card-body">
                <div class="row justify-content-md-center">
                  <div class="col-md-10">
                    <form class="mt-3" method="POST" action="">
                      <div class="mb-3">
                        <h1 class="text-center sign-in">Sign In</h1>
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Masukkan username" id="username" name="username" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" placeholder="Masukkan password" class="form-control" name="password">
                      </div>



                      <?php if (isset($error)) : ?>
                        <p>Username atau password salah</p>
                      <?php endif; ?>
                      <small style="float: right; font-family: Quicksand;">*Daftar jika belum punya akun</small>
                      <br>
                      <div class="form-check">
                        <label class="form-check-label" for="flexCheckDefault">
                          Remember Me
                        </label>
                        <input class="form-check-input" type="checkbox" value="" id="remember" name="remember">
                      </div>
                      <br>
                      <button type="submit" id="login" name="login" class="btn">Login</button>
                      <button type="submit" id="regist" name="regist" class="btn" style=" float: right; ">Register</button>
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
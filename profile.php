<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="dashboard.css">
  <style>
    .head{
      background: linear-gradient(90deg, #0E2038 8.62%, #0A4CA3 118.77%);
    }

    .user{
      text-align: center;
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
    <div class="jumbotron jumbotron-fluid head">
        <h5 style="float:left"><a style="color:white; padding-left: 20pt;" href="home.php">BACK</a></h5>
        <div class="container text-center">
            <img src="gambar/user.png" width="300">
        </div>
      </div>

      <br>
      <div class="container card-body box mt-4" style="padding-left:320pt">
        <div><h4>USERNAME :</h4></div><br>
        <div><h4>PASSWORD :</h4></div>
        </div>
        <div class="user" href="">
            <br>
            <button id="submit" name="submit" type="submit" class="btn" style="background: #0E2038; color: white; align-items: center;">EDIT</button>
        </div>

  </body>
  </html>
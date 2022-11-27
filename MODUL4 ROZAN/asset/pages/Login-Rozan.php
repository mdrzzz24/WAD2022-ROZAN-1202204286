<?php
include 'C:\xampp\htdocs\MODUL3 ROZAN\asset\config\connector.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/style/index.css">
  </head>
  <body>
   
    <div class="text-center">
        <div class="row">
            <div class="col">
                <img style="width: 780px;" src="../images/bmw_e46_325i_3_series_white_side_view_101160_800x1280.jpg" alt="">
            </div>
            <div class="col">
                <div style="width: 80%;" class="container mt-5 text-start mx-5">
                    <h1 class="fw-semibold ">Login</h1>
                    <form action="../config/login.php" method="POST" enctype="multipart/form-data">
                      <div class="mb-3 mt-5">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" require aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                        <input type="password" name="pw" class="form-control" require id="exampleInputPassword1">
                      </div>
                      <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember Me
                        </label>
                    </div>
                        <button class="btn btn-primary mt-3" name="submit" type="submit">Login</button>

                    </form>
                    <h6 class="mt-2">Anda belum punya akun? <a href="Register-Rozan.php">Daftar</a></h6>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

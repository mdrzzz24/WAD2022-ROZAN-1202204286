<?php
include 'C:\xampp\htdocs\MODUL3 ROZAN\asset\config\connector.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/style/index.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse m-3" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item mx-5">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="pages/ListCar-Rozan.php">MyCar</a>
        </li>
      </ul>
    </div>
    </div>
    </nav>
    <div class="container home-container">
        <div class="home-content">
            <img class="home-image" src="../asset/images/rx7.jpg" alt="rx7">
            <div class="text-container">
                <h1 class="fs-1 fw-semibold home-text">Selamat Datang Di Show Room Rozan</h1>
                <p class="home-p">Lihat atau tambah mobil dengan cara menekan tomboh MyCar di bawah ini atau akses melalui Navbar.<p>
                <form action="" method="post">
                  <input type="submit" name="submit" class="btn btn-primary mt-3" value="MyCar">
                </form>
                <?php
                      $sql = mysqli_query($conn,"SELECT id_mobil FROM showroom_rozan_table");
                      $cek = mysqli_num_rows($sql);
                      if(isset($_POST['submit'])){
                        if ($cek == 0){
                          header('Location: pages/Add-Rozan.php');
                        }else{
                          header('Location: pages/ListCar-Rozan.php');
                        }
                      }
                    ?>
                <div class="bottom-content">
                    <img class="bottom-image" src="../asset/images/logo-ead.png" alt="EAD-LOGO" srcset="">
                    <h6 class="bottom-text">Rozan_1202204286</h5>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyItem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/style/index.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <div class="collapse navbar-collapse m-3" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item mx-5">
                <a class="nav-link active" aria-current="page" href="../">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">MyCar</a>
              </li>
              
            </ul>
          </div>
            <a href="Add-Rozan.php" class="btn btn-light text-primary">Add Car</a>
        </div>
    </nav>

    <div class="container-fluid mt-5" style="height:100vh;">
            <div class="row" id="load_data">
            <?php
                include '../config/connector.php';
                $query = "SELECT * FROM showroom_rozan_table ORDER BY id_mobil ASC";
                $show = mysqli_query($conn,$query);
                while ($data = mysqli_fetch_array($show)) {
            ?>
                <div class="col-sm-3 mb-3" style="margin-left:4.5em;">
                    <div class="card shadow bg-white rounded-4" style="width:400px; height:400px; padding:15px;">
                    <center>
                        <img class="card-img-top bg-light rounded-4" src="../images/<?php echo $data['foto_mobil'];?>" alt="Card image" style="width:100%; height:200px">
                    </center>
                        <div class="card-body mt-1">
                            <h4 class="card-title fw-bold"><?php echo $data['nama_mobil'] ?></h4>
                            <p class="card-text p-desc text-secondary">
                            <?php echo $data['deskripsi'] ?></p>
                            <center>
                                <div>
                                    <a style="width: 150px;" href="../pages/Detail-Rozan.php?id_mobil=<?php  echo $data['id_mobil'];?>" class="btn btn-primary rounded-5">Detail</a>
                                    <a style="width: 150px;" href="../config/delete.php?id_mobil=<?php echo $data['id_mobil'];?>&foto_mobil=<?php echo $data['foto_mobil'];?>" onclick="konfirmasi()" class="btn btn-danger rounded-5" role="button">Delete</a>
                                </div>
                            </center>
                            </div>
                    </div>
                </div>
            <?php } ?>
        
            </div>
        </div>
</form>
<?php
                    $data_car = mysqli_query($conn,"SELECT * FROM showroom_rozan_table");
                    $countCar = mysqli_num_rows($data_car);
        ?>
        <div class="container mt-5">
            <p class="fw-bold opacity-50">
                Jumlah Mobil : <?php echo "$countCar" ?>
            </p>
        </div>
        <script>
                function konfirmasi(){
                konfirmasi=confirm("Apa anda yakin ingin menghapus mobil ini?")
                document.writeln(konfirmasi)
            }
        </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
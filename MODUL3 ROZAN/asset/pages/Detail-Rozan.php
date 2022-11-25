<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
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

    <div class="container">
    <?php 
            include '../config/connector.php';
            $id_mobil = $_GET['id_mobil'];
            $sql = "SELECT * FROM showroom_rozan_table where id_mobil ='$id_mobil'";
            $show = mysqli_query($conn,$sql);
            while ($data = mysqli_fetch_array($show)) {
        ?>
        <section class="container mt-5">
			<div class="row">
				<div class="col-6">
                <h3 class="fw-bold"><?php echo $data['nama_mobil'] ?></h3>
                <p class="fst-italic text-secondary">Detail Mobil <?php echo $data['nama_mobil'] ?></p>
					<img src="../images/<?php echo $data['foto_mobil'];?>" class=" shadow rounded" width="80%" alt="<?php echo $data['nama_mobil']?>">
				</div>
				<div class="col-6">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="mb-3">
							<span class="fw-bold">Nama Mobil</span>
							<input type="text" class="form-control mb-3 mt-3" value="<?php echo $data['nama_mobil']; ?>"  readonly>	
						</div>
                        <div class="mb-3">
							<span class="fw-bold">Nama Pemilik</span>
							<input type="text" class="form-control mb-3 mt-3" value="<?php echo $data['pemilik_mobil']; ?>" readonly>	
						</div>
                        <div class="mb-3">
							<span class="fw-bold">Merk</span>
							<input type="text" class="form-control mb-3 mt-3" value="<?php echo $data['merk_mobil']; ?>" readonly>	
						</div>
                        <div class="mb-3">
							<span class="fw-bold">Tanggal Beli</span>
							<input type="text" class="form-control mb-3 mt-3" value="<?php echo $data['tanggal_beli']; ?>" readonly>	
						</div>
                        <div class="mb-3">
							<span class="fw-bold">Deskripsi</span>
							<textarea class="form-control" value="" name="" id="" cols="30" rows="10" readonly><?php echo $data['deskripsi']; ?></textarea>	
						</div>
                        <div class="mb-3">
							<span class="fw-bold">Foto</span>
							<input type="file" class="form-control mb-3 mt-3" value="<?php echo $data['foto_mobil']; ?>" readonly>	
						</div>
                        <span class="fw-bold mb-3 mt-3">Status Pembayaran</span>
                        <h4 class="fw-semibold">
                            <?php echo $data['status_pembayaran'] ?>
                        </h4>                    
                        <div class="mb-5 mt-3">
                            <a style="width: 150px;" href="ListCar-Rozan.php "class="btn btn-primary rounded-5">Back</a>
                            <a style="width: 150px;" href="Edit-Rozan.php?id_mobil=<?php  echo $data['id_mobil'];?>" class="btn btn-success rounded-5">Edit</a>
                        </div>
                        <?php } ?>
				</div>
				</form>

			</div>
			</div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/style/index.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse m-3" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item mx-5">
          <a class="nav-link text-light" href="../">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="../pages/ListCar-Rozan.php">MyCar</a>
        </li>
      </ul>
    </div>
    </div>
    </nav>
    <div class="container">
      <div style="margin-top: 50px;" class="container-form">
        <h2>Tambah Mobil</h2>
        <p>Tambah Mobil Baru Anda Ke List Show Room</p>
        <form action="../config/insert.php" method="POST" enctype="multipart/form-data">
               <div class="mb-3 mt-5">
                  <label for="carname">Nama Mobil</label>
                  <input type="text" class="form-control mb-3 mt-3" name="carname" placeholder="BMW I4">
               </div>
               <div class="mb-3">
                  <label for="owner">Nama Pemilik</label>
                  <input type="text" class="form-control mb-3 mt-3" name="owner" placeholder="Rozan - 1202204286">
               </div>
               <div class="mb-3">
                  <label for="brand">Merk</label>
                  <input type="text" class="form-control mb-3 mt-3" name="brand" placeholder="BMW">
               </div>
               <div class="mb-3">
                  <label for="buydate">Tanggal Beli</label>
                  <input type="date" class="form-control mb-3 mt-3" name="buydate" placeholder="20/11/2022">
               </div>
               <div class="mb-3">
                  <label for="desc">Deskripsi</label>
                  <textarea class="form-control" name="desc" placeholder="The first all-electric Gran Coupé, the BMW i4 delivers outstanding dynamics with a high level of comfort and the ideal qualities to make it your daily driver. The five-door model comes equipped with fifth-generation BMW eDrive technology for sporty performance figures – reaching up to 340 hp. With a long range of up to 591 kilometres* and five spacious full-sized seats, it is the perfect companion"></textarea>
               </div>
               <div class="mb-3">
                  <label for="photo">Foto</label>
                  <input type="file" class="form-control mb-3 mt-3" name="photo">
               </div>
               <label for="status">Status Pembayaran</label><br>
               <div style="float: left; " class="form-check ">
                  <input class="form-check-input" type="radio" name="status"  value="Lunas">
                  <label class="form-check-label" for="exampleRadios1">Lunas</label>
               </div>
               <div style="float: left;" class="form-check mx-4">
                  <input class="form-check-input" type="radio" name="status" value="Belum Lunas">
                  <label class="form-check-label" for="exampleRadios2">Belum Lunas</label>
                </div>
                <div class="container">
                  <button type="submit" name="submit" class="btn btn-primary mb-3 mt-5 w-100">Selesai</button>
                </div>
              </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

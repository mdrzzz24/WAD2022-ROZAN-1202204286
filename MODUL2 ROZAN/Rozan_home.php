<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto text-light">
        <a class="nav-link text-light active" href="#">Home</a>
        <a class="nav-link text-secondary" href="Rozan_booking.php">Booking</a>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-3">
    <h3 class="text-center">WELCOME TO EAD RENT</h3>
    <h6 class="text-center">Find your best deal, here!</h6>
</div>
<form action="Rozan_booking.php" method="post">
  <div class="container text-center">
    <div class="row">
      <div class="col">
          <div class="card">
              <img style="height: 250px ;" src="assets/rush.png" class="card-img-top" alt="Toyota Rush">
              <input type="hidden" value="assets/rush.png" name="rush1">
              <div class="card-body">
                  <h5 class="text-start fw-semibold">Toyota Rush</h5>
                  <h6 class="text-start text-secondary">Rp 200000 / Day</h6>
              </div>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item text-primary fw-semibold">7 Kursi</li>
                  <li class="list-group-item text-primary fw-semibold">1500 CC</li>
                  <li class="list-group-item text-primary fw-semibold">Manual</li>
              </ul>
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="rush">Book Now</button>
              </div>
          </div>
      </div>
      <div class="col">
          <div class="card">
              <img style="height: 250px; padding:20px;" src="assets/ayla.png" class="card-img-top" alt="Toyota Ayla">
              <input type="hidden" value="assets/ayla.png" name="ayla1">
              <div class="card-body">
                  <h5 class="text-start fw-semibold">Toyota Ayla</h5>
                  <h6 class="text-start text-secondary">Rp 150000 / Day</h6>
              </div>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item text-primary fw-semibold">5 Kursi</li>
                  <li class="list-group-item text-primary fw-semibold">1200 CC</li>
                  <li class="list-group-item text-primary fw-semibold">Manual</li>
              </ul>
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="ayla">Book Now</button>
              </div>
          </div>
      </div>
      <div class="col">
          <div class="card">
              <img style="height: 250px; padding:20px;" src="assets/brio.png" class="card-img-top" alt="Honda Brio" name="brio">
              <input type="hidden" value="assets/brio.png" name="brio1">
              <div class="card-body">
                  <h5 class="text-start fw-semibold">Honda Brio</h5>
                  <h6 class="text-start text-secondary">Rp 150000 / Day</h6>
              </div>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item text-primary fw-semibold">5 Kursi</li>
                  <li class="list-group-item text-primary fw-semibold">1500 CC</li>
                  <li class="list-group-item text-primary fw-semibold">Automatic</li>
              </ul>
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="brio">Book Now</button>
              </div>
          </div>
      </div>
    </div>
  </div>
</form>

<footer style="background-color: rgb(223, 243, 255);" class="flex-shrink-0 py-4 text-dark mt-3 fixed-bottom">
    <div class="container text-center">
      <small>Created by Rozan_1202204286</small>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

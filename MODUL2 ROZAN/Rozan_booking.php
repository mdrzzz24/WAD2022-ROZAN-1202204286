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
        <a class="nav-link text-secondary" href="Rozan_home.php">Home</a>
        <a class="nav-link text-light active" href="#">Booking</a>
      </div>
    </div>
  </div>
</nav>
<form action="Rozan_my-booking.php" method="post">
  <div class="container text-center mt-3">
    <div class="row">
      <div class="col-sm-5 ">
        <?php if(isset($_POST['rush'])): ?>
          <img style="height: 250px; margin-top: 180px;" src="<?= $_POST['rush1']?>">
        <?php elseif(isset($_POST['ayla'])):?>
          <img style="height: 250px; margin-top: 180px;" src="<?= $_POST['ayla1']?>">
        <?php elseif(isset($_POST['brio'])):?>
          <img style="height: 250px; margin-top: 180px;" src="<?= $_POST['brio1']?>">
        <?php else:?>
          <h1 style="margin-top: 230px;">Select a car</h1>
         <?php endif; ?>
      </div>
      <div class="col-sm-7">
        <div class="mb-3 mt-3">
          <h6 class="text-start">Name</h6>
          <input class="form-control bg-light" type="text" value="ROZAN_1202204286" name="nama" readonly>
        </div>
        <div class="mb-3">
          <h6 class="text-start">Book Date</h6>
          <input type="date" class="form-control" name="bookdate" placeholder="">
        </div>
        <div class="mb-3">
          <h6 class="text-start">Start Time</h6>
          <input type="time" class="form-control" name="time" placeholder="">
        </div>
        <div class="mb-3">
          <h6 class="text-start">Duration <span class="text-secondary">(Days)</span></h6>
          <input type="text" class="form-control" name="duration" placeholder="">
        </div>
        <div class="mb-3">
          <div class="">
            <h6 class="text-start">Car Type</h6>
              <select class="form-select" aria-label="Default select example" name="car">
                <option selected>Open this select menu</option>
                <option value="Honda Brio">Honda Brio</option>
                <option value="Toyota Ayla">Toyota Ayla</option>
                <option value="Toyota Rush">Toyota Rush</option>
              </select>
          </div>
        </div>
          <div class="mb-3">
            <h6 class="text-start">Phone Number</h6>
            <input type="text" class="form-control" name="phone" placeholder="">
          </div>
          <div class="mb-3">
            <h6 class="text-start">Add Service(s)</h6>
            <div class="form-check">
              <input type="checkbox" class="form-check-input"   id="services" name="service[0]" value="Health Protocol">
              <h6 class="text-start">Health Protocol / Rp 25.000</h6>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="services" name="service[1]" value="Driver">
                <h6 class="text-start">Driver / Rp 100.000</h6>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox"  id="services" name="service[2]" value="Fuel Filled">
                <h6 class="text-start">Fuel Filled / Rp 250.000</h6>
            </div>
              </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-success w-100">Book</button>
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

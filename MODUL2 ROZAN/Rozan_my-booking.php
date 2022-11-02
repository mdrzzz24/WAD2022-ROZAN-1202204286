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
        
    <?php
        $date = $_P0ST['bookdate'];
        $duration = $_POST['duration'];
        $car = $_POST['car'];
        $phone = $_POST['phone'];
        $srv = isset($_POST['service'])? $_POST['service'] : '';

        $count = 0;
    
        $rand = rand(1000000,9999999);
        $nama = 'Rozan_1202204286';
    ?>  
      <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto text-light">
            <a class="nav-link text-secondary" href="Rozan_home.php">Home</a>
            <a class="nav-link text-light active" href="Rozan_booking.php">Booking</a>
          </div>
        </div>
      </div>
    </nav>
    
    <div class="container mt-3">
        <h3 class="text-center">Thank You Rozan_1202204286 for Reserving</h3>
        <h6 class="text-center">Please double check your reservation details</h6>
    </div>
    <div class="container">
    <table class="table border border-1">
      <thead>
        <tr>
          <th scope="col">Booking Number</th>
          <th scope="col">Name</th>
          <th scope="col">Check In</th>
          <th scope="col">Check Out</th>
          <th scope="col">Car Type</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Service(s)</th>
          <th scope="col">Total Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $rand?></td>
          <td><?php echo $nama;?></td>
          <td><?php date("d-m-y", strtotime(" ",strtotime($date)))?> <?php echo $_POST['time'] ?></td>
          <td><?php echo date("d-m-y", strtotime("+$duration day", strtotime($date))) ?><?php echo $_POST['time']?></td>
          <td><?php
          echo $car?></td>
          <td><?php echo $phone ?></td>
          <td>
                <?php 
                    if ($srv) {
                        $serv = $_POST['service'];
                        foreach ($srv as $service){
                            "<li> $service</li>";
                            if($service == "Health Protocol"){
                                $count += 25000;
                            }
                            elseif($service == "Driver"){
                                $count += 100000;
                            }
                            elseif($service == "Fuel Filled"){
                                $count += 250000;
                            }
                        }
                    }else{
                        echo 'No Service Added';
                    }
                ?>
          </td>
          <td>
            <?php 
            if ($car == "Toyota Ayla"){
              $ayla = 150000;
              echo ($ayla*$duration)+$count;
            }
            elseif ($car == "Honda Brio"){
              $brio = 150000;
              echo ($brio*$duration)+$count;
            }
            elseif ($car == "Toyota Rush"){
              $rush = 200000;
              echo ($rush*$duration)+$count;
            }
            ?>
          </td>
        </tr>
      </tbody>
    </table>
    </div>
    <footer style="background-color: rgb(223, 243, 255);" class="flex-shrink-0 py-4 text-dark mt-3 fixed-bottom">
        <div class="container text-center">
          <small>Created by Rozan_1202204286</small>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
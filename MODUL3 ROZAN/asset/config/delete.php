<?php
    include 'connector.php';

    $car_id=$_GET["id_mobil"];
    $photo=$_GET["foto_mobil"];
    $sql="delete from showroom_rozan_table where id_mobil=$car_id";
    $delete=mysqli_query($conn,$sql);

    unlink("../images/".$photo);

    if ($delete) {
        header("Location:../pages/ListCar-Rozan.php?hapus=berhasil");
    }
    else {
        header("Location:../pages/ListCar-Rozan.php?hapus=gagal");

    }
?>
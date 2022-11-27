<?php
    if (isset($_POST['update'])) {
        include 'connector.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $car_id = $_GET["id_mobil"];
            $car = $_POST['carname'];
            $owner = $_POST['owner'];
            $brand = $_POST['brand'];
            $date = $_POST['buydate'];
            $desc = $_POST['desc'];
            $status = $_POST['status'];
            $ekstensi_diperbolehkan	= array('png','jpg');
            $photo = $_FILES['photo']['name'];
            $x = explode('.', $photo);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['photo']['tmp_name'];
                if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                    move_uploaded_file($file_tmp, '../images/'.$photo);
                    
                    $sql = "UPDATE showroom_rozan_table SET nama_mobil = '$car', pemilik_mobil = '$owner', merk_mobil = '$brand', tanggal_beli = '$date', deskripsi = '$desc', foto_mobil = '$photo', status_pembayaran = '$status' WHERE id_mobil = '$car_id'";
                    $simpan_bank=mysqli_query($conn,$sql);

                    if ($simpan_bank) {
                        header("Location: ../pages/ListCar-Rozan.php?update=berhasil");
                    }else {
                        header("Location: ../pages/ListCar-Rozan.php?update=gagal");
                    }                   
                }
            }else {
                $photo="bank_default.png";
            }
        }
?>

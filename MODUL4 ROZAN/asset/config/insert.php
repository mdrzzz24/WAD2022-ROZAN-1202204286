<?php
    if (isset($_POST['submit'])) {
        include 'connector.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

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

            if (!empty($photo)){
                if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                    move_uploaded_file($file_tmp, '../images/'.$photo);
                    
                    $sql = "INSERT INTO showroom_rozan_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran)
                    VALUES ('$car','$owner','$brand','$date','$desc','$photo','$status')";
                    $simpan_bank=mysqli_query($conn,$sql);

                    if ($simpan_bank) {
                        header("Location: ../pages/ListCar-Rozan.php");
                    }                    
                }
            }else {
                $photo="bank_default.png";
            }
        }

    }
?>

<?php
    if (isset($_POST['submit'])) {
        include 'connector.php';
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $hp = $_POST['hp'];
        $pw = $_POST['pw'];
        $cpw = $_POST['conf-pw'];

        if ($pw != $cpw){
            header("Location: ../pages/Register-Rozan.php?error=passwordtidaksama");
        }else{
            $sql = "INSERT INTO user (nama, email, password, no_hp) VALUES ('$nama','$email','$pw','$hp')";
            $insert = mysqli_query($conn,$sql);
            
            if (!empty($email)){

                if ($insert){
                    header("Location: ../");
                }else{
                    header("Location: ../pages/?input=gagal");
                }
            }
        }
    }
?>

<?php 
    include 'connector.php';

    $mail = $_POST['email'];
    $password = $_POST['pw'];

    $sql = "SELECT * FROM user WHERE email='$mail' and password='$password'";
    $login = mysqli_query($conn,$sql);
    
    $cek = mysqli_num_rows($login);
    
    if($cek > 0){
    	session_start();
    	$_SESSION['email'] = $mail;
    	$_SESSION['status'] = "login";
    	// header("location:admin/index.php");
        echo'halo';
    }else{
    	// header("location:index.php");	
        echo 'gagal';
    }
?>
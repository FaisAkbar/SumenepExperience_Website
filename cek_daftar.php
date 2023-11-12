<?php 
	session_start();
	include 'connect.php';
    $email    = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
    $query1   = "SELECT * FROM akun WHERE email='$email'";
    $data1 = mysqli_query($con,$query1);
    $cek1 = mysqli_num_rows($data1);
	if($cek1 === 0)
	{
		$query2 = "INSERT INTO `akun` (`email`, `username`, `password`, `level`) VALUES ('$email', '$username', '$password', 'user')";
        mysqli_query($con,$query2);
        $_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
        $_SESSION['privilege'] = "user";
        $_SESSION['email'] = $email;
        header("location:index.php?daftar=berhasil");
	}
	else
	{
		header("location:daftar.php?pesan=emailsalah");
	}
	
 ?>


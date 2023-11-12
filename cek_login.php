<?php 
	session_start();
	include 'connect.php';
	$email	  = $_POST['email'];
	$password = $_POST['password'];
	$query1	  = "select * from akun where email='$email' and password='$password'";
	$query2	  = "and level='admin'";
	$query3   = "and level='user'";
	$query4	  = "select level from akun where email='$email' and password='$password'";
	$query5	  = "select username from akun where email='$email' and password='$password'";
	$data = mysqli_query($con,$query1);
	$cek = mysqli_num_rows($data);
	if($cek > 0)
	{
		$username = mysqli_query($con,$query5);
		$result	= mysqli_fetch_assoc($username);
		$_SESSION['username'] = $result['username'];
		$_SESSION['email'] = $email;
		$_SESSION['status'] = "login";
		$level = mysqli_query($con,$query4);
		$result = mysqli_fetch_assoc($level);
		if($result['level'] === 'admin')
		{
			$_SESSION['privilege'] = "admin";
			header("location:index_admin.php");
		}
		else if($result['level'] === 'user')
		{
			$_SESSION['privilege'] = "user";
			header("location:index.php");
		}
	}
	else
	{
		header("location:login.php?pesan=usernamesalah");
	}
	
 ?>


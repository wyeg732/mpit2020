<?php 
session_start();
$connect = mysqli_connect("127.0.0.1", "root", "Starkova24", "vhelp"); 

if ($_POST["hidden_value"] == "user") {

	$query = mysqli_query($connect, "SELECT * FROM users WHERE email='". $_POST['email'] ."' AND password='". $_POST['password'] ."' ");
	$result = $query-> fetch_assoc();

	if ($result['email']==$_POST['email'] && $result['password']==$_POST['password']){
		$_SESSION["id"] = $result['id'];
		header('location: http://localhost/vhelp/user/index.php');
	}  else{
		header('location: http://localhost/vhelp/login/index.php');
	}


	}elseif ($_POST["hidden_value"] == "organization") {

	$query = mysqli_query($connect, "SELECT * FROM orgs WHERE email='". $_POST['email'] ."' AND password='". $_POST['password'] ."' ");
	$result = $query-> fetch_assoc();

	if ($result['email']==$_POST['email'] && $result['password']==$_POST['password']){
		$_SESSION["id"] = $result['id'];
		header('location: http://localhost/vhelp/admin/index.php');
	}  else{
		header('location: http://localhost/vhelp/login/index.php');
	}
	}else{
		if ($_POST["type"] == "user") {
			$query = mysqli_query($connect, "SELECT * FROM users WHERE email='". $_POST['email'] ."' AND password='". $_POST['password'] ."' ");
	$result = $query-> fetch_assoc();

	if ($result['email']==$_POST['email'] && $result['password']==$_POST['password']){
		$_SESSION["id"] = $result['id'];
		header('location: http://localhost/vhelp/user/index.php');
	}  else{
		header('location: http://localhost/vhelp/login/index.php');
	}

		}
		elseif ($_POST["type"] == "org") {
		$query = mysqli_query($connect, "SELECT * FROM orgs WHERE email='". $_POST['email'] ."' AND password='". $_POST['password'] ."' ");
		$result = $query-> fetch_assoc();

		if ($result['email']==$_POST['email'] && $result['password']==$_POST['password']){
			$_SESSION["id"] = $result['id'];
			header('location: http://localhost/vhelp/admin/index.php');
		}  else{
			header('location: http://localhost/vhelp/login/index.php');
		}
	}
	}



 ?>

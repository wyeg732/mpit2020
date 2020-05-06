<?php 
session_start();
$con= mysqli_connect("127.0.0.1", "root", "Starkova24", "gogreen"); 

  $query = mysqli_query($con, "SELECT * FROM users WHERE email='". $_POST['email'] ."' AND password='". $_POST['password'] ."' ");
  $result = $query-> fetch_assoc();


  if ($result['email']==$_POST['email'] && $result['password'] == $_POST['password']){
    $_SESSION["id"] = $result['id'];
    $_SESSION["name"] = $result['name'];

    mysqli_query($con, 
       "INSERT INTO users_info
       (help, store, transactions, total_money, users_id) VALUES ('0', '0', '0', '0', '" . $_SESSION["id"] . "')");

    header('location: http://localhost/gogreen/profile/index.php');

  }  else{
    echo '<h1 class="bg-danger p-5 text-white">error: incorrect email or password</h1>
        <a href="http://localhost/gogreen/login/index.php"><button class="btn btn-primary">try again</button></a>
    ';
  }

 ?>

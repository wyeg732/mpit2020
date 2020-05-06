<?php 
session_start();

$connect = mysqli_connect("127.0.0.1", "root", "Starkova24", "vhelp"); 

$query = mysqli_query($connect, 
  "INSERT INTO apps
  (users_id, gigs_id, orgs_id, motivation, experience, skills, add_info) 

  VALUES ('" . $_SESSION["id"] . "', 
  	  '" . $_POST['gigs_id'] . "', 
  	  '" . $_POST['orgs_id'] . "', 
      '" . $_POST['motivation'] . "', 
      '" . $_POST['experience'] . "',
      '" . $_POST['skills'] . "',
      '" . $_POST['add_info'] . "'
       )");
header('location: http://localhost/vhelp/user/index.php');

 ?>
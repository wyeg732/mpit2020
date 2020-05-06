<?php 
session_start();

$connect = mysqli_connect("127.0.0.1", "root", "Starkova24", "vhelp"); 
$query = mysqli_query($connect, 
  "DELETE FROM apps WHERE users_id = '".$_POST["users_id"]."' AND gigs_id = '".$_POST["gigs_id"]."' ");

header('location: http://localhost/vhelp/admin/index.php');

 ?>
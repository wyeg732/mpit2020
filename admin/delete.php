<?php 
session_start();

$connect = mysqli_connect("127.0.0.1", "root", "Starkova24", "vhelp"); 

if (isset($_POST['empty_gig'])) {
	mysqli_query($connect, 
  "DELETE FROM gigs WHERE id = '".$_POST["gigs_id"]."' ");
}else{
	mysqli_query($connect, 
  "DELETE FROM apps WHERE users_id = '".$_POST["users_id"]."' AND gigs_id = '".$_POST["gigs_id"]."' ");
}

header('location: http://localhost/vhelp/admin/index.php');

 ?>

<?php 

include('database.php');

$get_id=$_GET['user_id'];

mysqli_query($con,"delete from users where user_id = '$get_id' ")or die(mysqli_error());

header('location:users.php');
?>
<?php

if (isset($_POST['submit'])){
	
	$name=$_POST['name'];
	
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$mes= $_POST['mes2'];
	
	include('connect.php');
	
	
    $sql="INSERT INTO `form` (`form_id`, `user_email`, `user_name`, `user_mess`, `user_ph`) 
    VALUES (NULL, '$email', '$name', '$mes', '$phone');";
	$run = mysqli_query($con,$sql);
    header('Location:index.php');
	}
	
	
?>

<?php
require './_includes/connection-2.php';
// create database connection
	$conn = dbConnect('admin');
// Form variables
	$first_name = htmlspecialchars($_REQUEST['first_name']);
	$last_name =  $_REQUEST['last_name'];
	$address = $_REQUEST['address'];
	$city = $_REQUEST['city'];
	$state = $_REQUEST['state'];
	$zip = $_REQUEST['zip'];
	$email = $_REQUEST['email'];

//SQL for entering fan data
	$sql = "INSERT INTO form_info (first_name, last_name, address, city, state, zip, email) VALUES ('$first_name', '$last_name', '$address', '$city', '$state', '$zip', '$email')";
if(mysqli_query($conn, $sql)){
	header('Location: form.php');
} else {
	echo "There was an error submitting your information, please try again.";
}
?>

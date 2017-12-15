<?php
require_once '../_includes/connection-2.php';
// create database connection
    $conn = dbConnect('student06.site06');
//Define form vairables
    $albumName = htmlspecialchars($_REQUEST['albumName']);
    $tracks = $_REQUEST['Tracks'];

$sql = "INSERT INTO album (album_name, tracks) VALUES ('$albumName', '$tracks')";
if(mysqli_query($conn, $sql)){
	echo "Album Added Successfully!";
} else {
	echo "There was an error adding the album";
}
?>

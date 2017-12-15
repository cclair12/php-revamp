<?php
function dbConnect($usertype, $connectionType = 'mysqli') {
	$host = 'localhost';
	$db = 'site06';
	if ($usertype == 'student06.site06') {
		$user = 'student06.site06';
		$pwd = 'blue73shoe';
	} elseif ($usertype == 'admin') {
		$user = 'admin';
		$pwd = 'instructor';
	} else {
		exit('Unrecognized user');
	}
	//Connection code goes here
	if ($connectionType == 'mysqli') {
		$conn = @ new mysqli($host, $user, $pwd, $db);
		if ($conn->connect_error) {
			exit($conn->connect_error);
		}
		return $conn;
	} else {
		try {
			return new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
		} catch (PODException $e) {
			echo $e->getMessage();
		}
	}
}

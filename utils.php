<?php
function connect_db(){
	$servername = "localhost";
	$username = "ductri";
	$password = "ductri";
	$dbname = "authoritydb";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully<br>";
	return $conn;
}

function register($username, $origin_text, $pass) {
	$conn = connect_db();
	$sql = "INSERT INTO user(id, text, pass) VALUES ('$username', '$origin_text', '$pass')";
	if ($conn->query($sql)==TRUE) {
		echo "Register success!<br>";
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

function mutation_with_index($pass, $index) {
	return $pass.$index;
}


?>
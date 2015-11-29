<?php
include('utils.php');
$conn = connect_db();
$username = $_POST["username"];
$index = $_POST["index"];
$pass = hash("md5", mutation_with_index($_POST["pass"],$index));

$sql = "SELECT pass FROM user WHERE id='$username'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($row["pass"]==$pass) {
	echo "Login success<br>";
}
else {
	echo "Login fail<br>";
}

?>
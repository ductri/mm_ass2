<?php
include('utils.php');
$username = $_POST["username"];
$conn = connect_db();
$sql = "SELECT text FROM user WHERE id='$username'";
$result = $conn->query($sql);
if ($result) {
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$text = $row["text"];
print <<<END
		<body>
		<form action="login_step2.php" method="POST">
			Index: <input type="password" name="index"><br>
			<textarea rows="10" cols="150" name="pass">$text</textarea>
			<input type="submit" name="submit" value="Dang ky">
			<input type="hidden" name="username" value="$username"><br>
		</form>
		</body>
END;
	}
}
?>

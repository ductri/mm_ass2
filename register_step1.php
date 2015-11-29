<?php
include('utils.php');
echo "Tên file: ".$_FILES["file2upload"]["name"]; echo "<br>";
echo "Type: ".$_FILES["file2upload"]["type"];echo "<br>";
echo "Size: ".$_FILES["file2upload"]["size"]; echo "<br>";
echo "Temporary file: ".$_FILES["file2upload"]["tmp_name"]; echo "<br>";
echo "Error: ".$_FILES["file2upload"]["error"]; echo "<br>";

$f = fopen($_FILES["file2upload"]["tmp_name"], "r") or die("File cannot open!");
$content = fread($f, $_FILES["file2upload"]["size"]);
$hash_ori = hash("md5", $content);
header('Content-Type: text/html; charset=utf-8');
print <<<END
<body>
<form action="register_step2.php" method="POST">
	Username: <input type="text" name="username"><br>
	Index: <input type="password" name="index"><br>
	<textarea rows="10" cols="150" name="pass">$content</textarea>
	<input type="submit" name="submit" value="Dang ky">
	<input type="hidden" name="origin" value="$content">
</form>
</body>
END;

fclose($f);
connect_db();



?>
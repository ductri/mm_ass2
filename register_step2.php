<?php
include('utils.php');
$username = $_POST["username"];
$text = $_POST["origin"];
$pass = hash("md5", mutation_with_index($_POST["pass"],$_POST["index"]));

register($username, $text, $pass);
echo '<a href="index.html">Dang nhap</a><br>';
?>
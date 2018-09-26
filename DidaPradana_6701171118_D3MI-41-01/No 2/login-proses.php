<?php 
session_start();

$user = array(
	"nama" => "Dida Pradana",
	"username" => "dida",
	"password" => 12345,
	"notelp" => "08134767557"
);

if ($user["username"] == $_POST["username"] && $user["password"] == $_POST["password"]) {
	$_SESSION["username"] = $user["username"];
	$_SESSION["user"] = $user;
	header("Location: form.php");
}else {
	header("Location: login.php");
}
?>
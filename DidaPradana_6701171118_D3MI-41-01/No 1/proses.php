<?php
session_start();

$dir = "uploads/";
$nama_file = $_FILES["gambar"]["name"];
$nama_file_tmp = $_FILES["gambar"]["tmp_name"];
$target_file = $dir.$nama_file;

if (move_uploaded_file($nama_file_tmp, $target_file)) {
	echo "Berhasil";
	header("Location: halamanakhir.php");
}

$data = array(
	"nama" => $_POST["nama"],
	"hobi" => $_POST["hobi"],
	"wisata" => $_POST["wisata"],
	"gambar" => $target_file
);

$_SESSION["user"] = $data;

// print_r($data);
?>
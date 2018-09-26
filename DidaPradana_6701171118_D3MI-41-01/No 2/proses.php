<?php
session_start();
error_reporting(0)

$user = $_SESSION["user"];
$barang = $_POST["barang"];
$pengiriman = $_POST["pengiriman"];
$alamat = $_POST["alamat"];
$tgl_beli = $_POST["tanggal"];
$harga = 0;
$harga_peng = 0;

for ($i=0;$i<count($barang);$i++) { 
    if ($barang[$i] == "beras")
        $harga += 10000;
    else if ($barang[$i] == "tepung") 
        $harga += 5000;
    else if ($barang[$i] == "kopi")
        $harga += 7000;
    else if ($barang[$i] == "telur")
        $harga += 6000;
}

if($pengiriman == "JNE")
    $harga_peng = 20000;
if($pengiriman == "Tiki")
    $harga_peng = 18000;
if($pengiriman == "J&T")
    $harga_peng = 22000;

function total($a, $b) {
    return $a + $b;
}
echo "<br>";
echo "Tanggal Beli : $tgl_beli;";
echo "<br>";
echo "Nama : ";echo$user["nama"];
echo "<br>";
echo "No Telp :";echo$user["notelp"];
echo "<br>";
echo "Barang yang Dibeli :";
echo "<br>";
    foreach ($barang as $barang_b) {
                echo $barang_b . "<br>";
    }
echo "<br>";
echo "Pengiriman";
echo "<br>";
echo $pengiriman . " " . $harga_peng;
echo "<br>";
echo "Total Harga";
echo "<br>";
echo total($harga, $harga_peng);


?>

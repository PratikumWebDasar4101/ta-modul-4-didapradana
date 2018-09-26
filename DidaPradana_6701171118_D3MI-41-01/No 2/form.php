<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action="proses.php" method="post">
		Daftar Belanja<br>
		<input type="checkbox" name="barang[]" value="beras">Beras<br>
        <input type="checkbox" name="barang[]" value="tepung">Tepung<br>
		<input type="checkbox" name="barang[]" value="kopi">Kopi<br>
        <input type="checkbox" name="barang[]" value="telur">Telur
        <br><br>
        Jasa Pengirim<br>
        <input type="radio" name="pengiriman" value="J&T">J&T
        <input type="radio" name="pengiriman" value="JNE">JNE
        <input type="radio" name="pengiriman" value="Tiki">Tiki
        <input type="radio" name="pengiriman" value="Wahana">Wahana
        <br><br>
        <input type="hidden" name="tanggal" value="<?php echo date("Y/m/d"); ?>">
		<input type="submit" value="Beli">
	</form>
</body>
</html>
<?php 
session_start();
$data = $_SESSION['user'];
?>

<table width="900px" align="center" border="2">
	<tr align="left">
		<th>Nama</th>
		<th>Genre</th>
		<th>Wisata</th>
		<th>Gambar</th>
	</tr>
	<tr valign="top">
		<td><?php echo $data['nama']; ?></td>
		<td>
			<?php
				foreach ($data['hobi'] as $hobbies => $value) {
			 		echo $value . '<br>';
			 	} 	
			?>
		</td>
		<td>
			<?php
				foreach ($data['wisata'] as $wisatas => $value) {
			 		echo $value . '<br>';
			 	} 	
			?>
		</td>
		<td>
			<img src="<?php echo $data["gambar"]; ?>" alt="">
		</td>
    </tr>
    <a href="formawal.html">Hapus</a>
</table>
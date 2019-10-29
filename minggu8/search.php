<?php
	$cari=$_POST['cari'];
	$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"PABW_minggu8");
	$hasil=mysqli_query($conn,"select * from mahasiswa where
	nama like '%$cari%'");
	$jumlah=mysqli_num_rows($hasil);
	echo "<br>";
	echo "Ditemukan: $jumlah";
	echo "<br>";
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
		<h3>data ditemukan = <?php echo $jumlah; ?></h3><br \><br \>
		<?php while($baris=mysqli_fetch_array($hasil)) { ?>	
		<img src="img/<?php echo $baris["foto"] ?>" width="200" height="200" style="border-radius: 50%;"> <br \>
		<table border="1 px solid" width="700px" cellpadding="5px" style="border-radius: 10px;">
			<tr>
				<td>Nrp</td>
				<td><?php echo $baris["NRP"] ?></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td> <?php echo $baris["nama"] ?></td>
			</tr>
			<tr>
				<td>PROGRAM STUDI</td>
				<td><?php echo $baris["KD_jur"] ?></td>
			</tr>
		</table>
	<?php } ?>
		<button type="batal" name="batal" ><a href="tugas_utama.php">kembali</a></button>
</body>
</html>
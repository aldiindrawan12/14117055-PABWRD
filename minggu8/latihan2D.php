<!DOCTYPE html>
<HTML>
	<HEAD>
		<title>Koneksi Database MySQL</title>
	</HEAD>
	<BODY>
		<h1>Koneksi database dengan mysql_fetch_assoc</h1>
		<?php
		$conn=mysqli_connect ("localhost","root","")
				or die ("koneksi gagal");
		mysqli_select_db($conn,"PABW_minggu8");
		$hasil = mysqli_query($conn,"select * from liga");
		while ($row=mysqli_fetch_row($hasil)) {
			echo "Liga " .$row[1];
			echo " mempunyai " .$row[2];
			echo " wakil di liga champion <br>";
		}
		?>
	</BODY>
</HTML>
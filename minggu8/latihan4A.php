<!DOCTYPE html>
<HTML>
	<HEAD>
		<title>Cari Database</title>
	</HEAD>
	<BODY>
		<h1>Searching Buku Tamu untuk database MySQL</h1>
		<form action="hasilsearch.php" method="post">
			<select name="kolom">
			<option value="nama">nama</option>
			<option value="email">email</option>
			</select>
			Masukkan kata yang anda cari
			<input type ="text" type ="text" name="cari">
			<input type ="submit" value="cari" >
		</form>
	</BODY>
</HTML>

<!DOCTYPE html>
<html>
<head>
	<title>data mahasiswa</title>
</head>
<body>
	<h3>TAMBAH DATA</h3>
	<form action="tambah.php" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label>NRP : </label>
				<input type="text" name="nrp"/>
			</li>
			<li>
				<label>nama : </label>
				<input type="text" name="nama"/>
			</li>
			<li>
				<label>foto : </label>
				<input type="file" name="foto"/>
			</li>
			<li>
				<select name="jurusan">
					<option>informatika</option>
					<option>biologi</option>
					<option>matematik</option>
					<option>elektro</option>
					<option>PWK</option>
				</select>
			</li>
			<button type="submit" name="submit" >tambah data</button>
		</ul>
	</form>
	<h2>=========================================================</h2>
	<H3>SEARCH DATA</H3>
	<form action="search.php" method="post">
	NAMA = 
	<input type ="text" name="cari">
	<input type ="submit" value="cari data" >
	</form>
	<h2>=========================================================</h2>
	<H3>HAPUS DATA</H3>
	<form action="delete.php" method="post">
	NAMA = 
	<input type ="text" type ="text" name="hapus">
	<input type ="submit" value="hapus data" >
	</form>
</body>
</html>
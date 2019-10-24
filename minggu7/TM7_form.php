<?php


require 'TM7_tampil.php';

if(isset($_POST["submit"])){
	if($_POST["nama"]!=null){
		$string = tampil();
	}else{
		echo "
			<script>
				alert('nama harus diisi');
				document.location.href='TM7_form.php';
			</script>
		";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styletugas.css">
	<link rel="stylesheet" type="text/css" href="reset.css">
</head>
<body>
	<div class="container">
				<form action="" method="post" enctype="multipart/form-data">
					<ul>
						<li>
							<label>NAMA</label><br \>
							<input type="text" name="nama"/>
						</li>
						<li>
							<label>ALAMAT</label><br \>
							<input type="text" name="alamat"/>
						</li>
						<li>
							<label>JENIS KELAMIN</label><br \>
							<input type="radio" name="jk" value="laki-laki"> laki-laki<br \>
							<input type="radio" name="jk" value="perempuan"> perepmuan<br \>
						</li>
						<li>
							<label>GOLONGAN DARAH</label><br \>
							<select name="gol"> 
								<option>A</option>
								<option>AB</option>
								<option>B</option>
								<option>O</option>
							</select>
						</li>
						<li>
							<label>HOBBY</label><br \>
							<input type="checkbox" name="hoby" value="berenang"/>berenang <br \>
							<input type="checkbox" name="hoby" value="sepak-bola"/>sepak bola <br \>
							<input type="checkbox" name="hoby" value="bulutangkis"/>bulutangkis <br \>
							<input type="checkbox" name="hoby" value="belanja"/>belanja <br \>
							<input type="checkbox" name="hoby" value="jalan-jalan"/>jalan-jalan <br \>
						</li>
						<li>
							<label>KETERANGAN </label><br \>
							<textarea name="ket"></textarea>
						</li>
						<li>
							<button type="submit" name="submit" >tampilkan</button>
							<button type="reset" name="reset" >reset</button>
						</li>
					</ul>
				</form>
	</div>
	<div class="container2">
		<p><?php echo $string ?></p>
	</div>
</body>
</html>
<?php
$nama = $_GET["nama"];
$warna = $_GET["warna"];
	function hitungkarakter($nama){
		$jumlah=0;
		for($i=0;$i<strlen($nama);$i++){
			$jumlah++;
		}
		return $jumlah;
	}

	function harga($nama){
		$jumlah = hitungkarakter($nama);
		if($jumlah>1 && $jumlah<=10){
			return $jumlah*300;
		}else if($jumlah>10 && $jumlah<=20){
			return $jumlah*500;
		}else if($jumlah>20){
			return $jumlah*700;
		}else{
			return 0;
		}
	}

	function warna($warna){
		if($warna != null){
			return $warna;
		}else{
			return "red";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET">
		<ul >
			<li style="display: block;">
				<label>Nama</label>
			</li>
			<li style="display: block;">
				<input type="text" name="nama">
			</li>
			<li style="display: block;">
				<label>warna (boleh kosong)</label>
			</li>
			<li style="display: block;">
				<input type="text" name="warna">
			</li>
			<li style="display: block;">
				<button href="#proses">harga bet</button>
			</li>
		</ul>
	</form>
	<div id="proses">
		<?php 
		$warna = warna($warna);
		$harga=harga($nama);
		?>
		<font style="color:<?php echo $warna?>"> <?php echo $nama ?> </font><br \>
		<font style="color:<?php echo $warna?>"> harga bet = <?php echo $harga ?> </font>
	</div>
</body>
</html>
<?php

$n=$_GET["angka"];
function faktorial($n){
	if ($n == 0)
		return 1;
	else
		return $n* faktorial($n-1);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET">
		<label>angka = </label>
		<input type="text" name="angka">
		<button href="#proses">nilai faktorial</button>
	</form>

	<div id="proses">
		<?php 
		$hasil = faktorial($n);
			echo "hasil = $hasil";
		?>
	</div>
</body>
</html>
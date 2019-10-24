<?php 

function tampil(){
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$jk = $_POST["jk"];
	$gol = $_POST["gol"];
	$hobi = $_POST["hoby"];
	$ket = $_POST["ket"];

	$string = "nama saya " . $nama . " , saya tinggal di " . $alamat ."\n saya berjenis kelamin " . $jk . " dan bergolongan darah " . $gol . "\n saya memiliki hobi " . $hobi . "\n . keterangan = " . $ket;
	return $string;
}


?>
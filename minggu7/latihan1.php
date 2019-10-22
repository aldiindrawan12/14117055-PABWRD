<?php 
	
function tukar(&$angka1,&$angka2){
	$temp=$angka1;
	$angka1=$angka2;
	$angka2=$temp;
}

$angka1=6;
$angka2=10;

echo "angka sebelum ditukar <br \>";
echo "A= $angka1 <br \>";
echo "B= $angka2 <br \>";

tukar($angka1,$angka2);
echo "<br \> angka setelah ditukar <br \>";
echo "A= $angka1 <br \>";
echo "B= $angka2 <br \>";

<?php
$nama = array("lanirne","aduh","qifuat","toda","anevi","samid","kifuat");
echo "nama sebelum diurutkan <br \>";
foreach($nama as $value1){
	echo "$value1 <br \>";
}

sort($nama); //fungsi untuk urutkan isi array
echo "<br \> nama setelah diurutkan <br \>";
foreach($nama as $value2){
	echo "$value2 <br \>";
}
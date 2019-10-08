<?php
$n=0;
echo "bilangan prima antara 1-37 <br \>";
for($i=1;$i<=37;$i++){
	for($j=1;$j<=37;$j++){
		if($i % $j == 0){
			$n++;
		}
	}
	if($n==2){
		echo "$i  ";
	}	
	$n=0;
}


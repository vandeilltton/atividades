<?php

$i = 0;
$soma = 0;
while($i <= 100){
	if($i%2 != 0){
		$soma += $i;
	}
	$i++;
}
echo $soma;
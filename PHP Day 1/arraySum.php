<?php

function sumArrayValues () {
	$numbers = array(1,2,5,10,255,3);
	$sum = 0;
	for($i = 0; $i < 6; $i++) {
		$sum = $sum + $numbers[$i];
	}
		echo $sum;
		// $avg = $sum / 6;
		// echo $avg;
}

sumArrayValues();

?>
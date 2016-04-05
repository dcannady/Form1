
<?php
	

	$oddNums = array();
	for($i = 0; $i < 20001; $i++) {
		if ($i % 2 !== 0){
			array_push($oddNums, $i);
		}
	}
	var_dump($oddNums);


?>
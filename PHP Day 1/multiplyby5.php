<?php
// Create a function called 'multiply()' that reads each value in the array (e.g. $A = array(2, 4, 10, 16)) and returns an array where each value has been multiplied by 5.

// Modify this function so that you can pass an additional argument to this function. The function should multiply each value in the array by this additional argument (call this additional argument 'factor' inside the function). For example say $A = array(2,4,10,16). When you say...
function multiply($arr) {


	for($i = 0; $i < count($arr); $i++) {
		$arr[$i] *= 5;
	}
	var_dump ($arr);

}
	$A = array(2, 4, 10, 16);
	multiply($A);

	$B = array(1,5,3,6);
	multiply($B);


?>

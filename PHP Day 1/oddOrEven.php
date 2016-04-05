<?php
	// Create a program that counts from 1 to 2000. As it loops through each number, have your program generate the number and a message telling whether it's odd or even.
	// function oddEven(){

		for ($i = 1; $i < 2001; $i++) {
			if($i % 2 === 0) {
				echo "Number is $i. This is an even number. <br>";
			}
			else if ($i % 2 !== 0) {
				echo "Number is $i. This is an odd number. <br>";
			}
		}


	

	


?>
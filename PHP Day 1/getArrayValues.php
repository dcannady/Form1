<?php
// Create a function called 'print_lists' that takes any array and prints each value in the array in an <li>, which is part of a <ul>. For example, running print_lists($A) where $A = array(2,3,'hello'); should output a html response that looks like...

function print_lists($arr) {
	for($i = 0; $i < count($arr); $i++) {
		echo "<ul><li>". $arr[$i] ."</li></ul>";
	}

}
	$list = array(1,2,3,4);
	print_lists($list);


?>
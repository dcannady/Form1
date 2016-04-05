<?php


function keysValues(){

	$users = array("first_name" => "Michael", "last_name" => "Choi");
			
			echo "There are " . count($users) . "keys in this array: ";
			foreach($users as $key => $value) {
			echo $key . ", ";
			}
			foreach($users as $key => $value) { 
			echo "<br>The value in the key " . $key . " is " . $value; 
			}

}	
	keysValues();

?>
<!-- 
There are 2 keys in this array: first_name, last_name
The value in the key 'first_name' is 'Michael'.
The value in the key 'last_name' is 'Choi'. -->
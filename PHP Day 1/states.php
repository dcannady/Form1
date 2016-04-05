<!-- You have an array, called $states, which has the following information:

$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
Display a drop-down menu in HTML (using select tag and option tag) that displays the different states. Create this drop-down menu using for loops. Create another identical drop-down menu but, this time, use foreach statement.

Once you're done with above exercise, insert three new states in the array $states: 'NJ', 'NY', 'DE'. Display a new drop-down menu with the eight unique states.

Your output should have three drop-down menus. -->

<?php



	for($i = 0; $i < count($states); $i++) {
		$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
		echo "<select name='states'>" . "<option value='$states[$i]'>" . $states[$i] . "</option>" . "</select>";
	}

	// foreach($states as $keys) {
	// 	echo "<select name ='states'>" . "<option value='$keys'>" . $keys . "</option>" . "</select>";
	// }


		// foreach($states as $keys) {
		// 	echo "<select name='states'>" . "<option value='$states[$i]'>" . $states[$i] . "</option>" . "</select>";
		// }

?>

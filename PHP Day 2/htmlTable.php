<?php

$users = array( 
   array('first_name' => 'Russell', 'last_name' => 'Wilson'),
   array('first_name' => 'Thomas', 'last_name' => 'Rawls'),
   array('first_name' => 'Earl', 'last_name' => 'Thomas'),
   array('first_name' => 'Doug', 'last_name' => 'Baldwin'),
   array('first_name' => 'Jermaine', 'last_name' => 'Kearse'),
   array('first_name' => 'Jimmy', 'last_name' => 'Graham'), 
   array('first_name' => 'Tyler', 'last_name' => 'Lockett'),
   array('first_name' => 'Kam', 'last_name' => 'Chancellor'),
   array('first_name' => 'Richard', 'last_name' => 'Sherman'),
   array('first_name' => 'Bobby', 'last_name' => 'Wagner')
);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	 table {
	 	border: 1px solid black;
	 }

	 tr {
	 	border: 1px solid black;
	 }

	</style>
</head>
<body>
<table>
	<thead>
		<td>User #</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Full Name</td>
		<td>Full Name in upper case</td>
		<td>Length of full name</td>
	</thead>
		<?php
			for($i = 0; $i < count($users); $i++) {
				echo "<tr>";
				echo "<td>" . ($i+1) . "</td>";
				echo "<td>" . $users[$i]['first_name'] . "</td>";
				echo "<td>" . $users[$i]['last_name'] . "</td>";
				echo "<td>" . $users[$i]['first_name'] . " " . $users[$i]['last_name'] . "</td>";
				echo "<td>" . strtoupper ($users[$i]['first_name'] . " " . $users[$i]['last_name']) . "</td>";
				echo "<td>" . strlen ($users[$i]['first_name'] . $users[$i]['last_name']) . "</td>";
				echo "</tr>";
			}
		?>
</table>
</body>
</html>
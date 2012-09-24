<!doctype html>
<html>
<head>
	<title>Sample Form</title>
</head>
<body>

<h1>Contents of 'Person' table</h1>
<?
function displayData() {
	$mysqli = new mysqli('localhost', 'root', 'root', 'hymn_text');

	$query = "SELECT * FROM person";
	$result = $mysqli->query($query);

	while($row = $result->fetch_row()) {
		printf("%s: <strong>%s</strong>, %s, %s, %s<br>", $row[0], $row[1], $row[2], $row[3], $row[4]);
	}
		// add an element to $names array (and create it if there isn't one)
		// $row[1] refers to the names that are pulled from the database above
		/*$names[] = $row[1];		
	

	echo("<p>print out single value of array:<br>");

	// remember that all arrays start at 0
	echo("name 0:" . $names[0] . "<br>");
	// so, you see that arrays are like lists of key/value pairs that can be referenced like
	// $some_array[KEY] = VALUE
	
	echo("<p>loop through all values:<br>");

	// if i want to loop through my array, use a foreach loop
	// this automatically loops through every element in the $names array
	// for each element (=value) of the array, it temporarily stores the value in $value so you can do stuff with it.
	foreach ($names as $value) {
		echo("value:" . $value . "<br>");
	}


	// you can also get keys and values at the same time while traversing an array
	echo("<p>key/value pair example:<br>");

	foreach ($names as $key => $value) {
		echo "Key: $key; Value: $value<br>";
	}
}
	// the power of this is that you can assign keys that are not just 0,1,2,3,4 etc, but a meaningful number or string
	// let's get data from the DB again.
	unset($names);
	$result = $mysqli->query($query);

	while($row = $result->fetch_row()) {
		//here, instead of using the default keys of 0,1,2 etc i am using the ID retrieved from the DB (which is stored in $row[0])
		//this is equivalent to saying (for each row) $names[ID] = NAME
		$names[$row[0]] = $row[1];		
	}

	echo("<p>a second key/value pair example:<br>");

	foreach ($names as $key => $value) {
		echo "Key: $key; Value: $value<br>";
	}


	// let's go crazy.
	unset($names);
	$result = $mysqli->query($query);
	while($row = $result->fetch_row()) {

		// instead of using the ID as a key, let's use the name
		$names[$row[1]] = $row[0];		
	}

	echo("<p>a third key/value pair example:<br>");

	foreach ($names as $key => $value) {
		echo "Key: $key; Value: $value<br>";
	}
	}*/
}
?>
<h3>Display People</h3>
<?php 
displayData ();
?>
</body>
</html>
<?php
$con = mysql_connect('localhost','root','root');
if (!$con){
	die('Could not connect');
}
/*else {
	echo "Connection success!";
	}*/
/*opens the database */
mysql_select_db("hymns", $con);

$result = mysql_query("SELECT * FROM hymnal");

while ($row = mysql_fetch_array($result)){
	echo " " .$row['publisher'];
	echo "<br />";
	}
	
mysql_close($con);

?>

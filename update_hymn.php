<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'hymn_text');

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

//echo 'Success... ' . $mysqli->host_info . "\n";

$title = $_POST["title"];
$fline = $_POST["fline"];
$refrain = $_POST["refrain"];
$lang = $_POST["language"];

$query = "INSERT INTO text (pk_text, firstLine, textTitle, refrainFirstLine, languages) VALUES ('Null', '$fline', '$title', '$refrain', '$lang')";

if ($mysqli->query($query) === TRUE) {
    printf("Hymn successfully added.\n");
}

$id = $mysqli->insert_id;

printf ($id);



$mysqli->close();
?>

<html>
<head>
	<title>New Hymn</title>
</head>
<body>

<h2>New Hymn Data</h2>
<p>Title: <?php echo $title ?></p>
<p>First Line: <?php echo $fline ?></p>
<p>Refrain: <?php echo $refrain ?></p>

<h3>Add Author</h3>
<form action="update_person.php" method="post">
Author: <input type="text" name="name" /></br>
Gender: <input type="text" name="gender" /></br>
Born: <input type="text" name="byear" /></br>
Died: <input type="text" name="dyear" /></br>
<input type="submit" name="add" id="add" value="Submit" />
</form>

</body>
</html>

<?php
/*
if ($result = $mysqli->query("SELECT fk_person from author_join where fk_text='$id'")) {
    printf("Select returned %d rows.\n", $result->num_rows);
	}

 $result->close();
*/
?>



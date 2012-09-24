<html>
<head>
<title>Add New Hymn</title>
<meta http-equiv="Content-Type" content="text/html">
</head>

<body>

<?php


	$con = mysql_connect("localhost","root","root");
		if (!$con)
  			{
  			die('Could not connect: ' . mysql_error());

	mysql_select_db("hymn_text", $con);

$title = $_POST["title"];
$fline = $_POST["fline"];
$refrain = $_POST["refrain"];
$lang = $_POST["language"];


$query = "INSERT INTO text (pk_text, firstLine, textTitle, refrainFirstLine, languages) VALUES ('Null', '$fline', '$title', '$refrain', '$lang')";


mysql_query($query);

if (!mysql_query($query))
  {
  die('Error: ' . mysql_error());
  }

  else {

  	echo 'Hymn was successfully added to database.';
  }

mysql_close($mysqli);

?>

<h1>Can I add this way?</h1>
<p>Title: <?php echo $title; ?></p>
<p>First Line: <?php echo $fline; ?></p>
<p>Refrain: <?php echo $refrain; ?></p>
















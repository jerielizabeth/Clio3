<html>
<head>
<title>Add New Hymn</title>
<meta http-equiv="Content-Type" content="text/html">
</head>

<body>

<?php


	$test = mysqli_connect("localhost","root","root");
		if (!$test)
  			{
  			die('Could not connect: ' . mysqli_connect_error());
  		}

	mysqli_select_db("hymn_text", $test);

$title = $_POST["title"];
$fline = $_POST["fline"];
$refrain = $_POST["refrain"];
$lang = $_POST["language"];


$query = "INSERT INTO text (pk_text, firstLine, textTitle, refrainFirstLine, languages) VALUES ('Null', '$fline', '$title', '$refrain', '$lang')";


mysqli_query($query, $test);

if (!mysqli_query($query))
  {
  die('Error: ' . mysqli_error_list());
  }

  else {

  	echo 'Hymn was successfully added to database.';
  }

mysqli_close($con);

?>

<h1>Can I add this way?</h1>
<p>Title: <?php echo $title; ?></p>
<p>First Line: <?php echo $fline; ?></p>
<p>Refrain: <?php echo $refrain; ?></p>
















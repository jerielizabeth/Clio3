<?php

//include ("connect-db.php");

$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hymn_text", $con);


$name = $_POST['name'];
$sex = $_POST['sex'];
$byear = $_POST['byear'];
$dyear = $_POST['dyear'];


$query = "INSERT INTO person (personName, gender, birthYear, deathYear) VALUES ('$name', '$sex', '$byear', '$dyear')";

mysql_query($query);

if (!mysql_query($query))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($mysqli);

?>
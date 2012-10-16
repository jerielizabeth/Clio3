<?php

include ("connect-db.php");



$name = $_POST['name'];
$sex = $_POST['sex'];
$byear = $_POST['byear'];
$dyear = $_POST['dyear'];


$query = "INSERT INTO person (pk_person, personName, gender, birthYear, deathYear) VALUES ('Null', '$name', '$sex', '$byear', '$dyear')";

mysql_query($query);

if (!mysql_query($query))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($mysqli);

?>
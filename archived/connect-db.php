<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'hymns');

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

//echo 'Success... ' . $mysqli->host_info . "\n";
?>
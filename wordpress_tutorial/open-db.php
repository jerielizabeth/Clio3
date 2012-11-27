<?php

$mysqli = new mysqli('localhost', 'academic_hymns', 's3c7r3', 'academic_hymns');
 
// check connection
<php if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error()); 
} 

?>
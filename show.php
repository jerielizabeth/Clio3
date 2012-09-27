<!doctype html>
<html>
<head>
    <title>Show Page</title>
</head>
<body>

<?php

//include('connect-db.php');

mysql_connect ("localhost", "root", "root") or die ('Error: . . .');
mysql_select_db("hymn_text");

// confirm that the 'id' variable has been set
        //if (isset($_GET['id']) && is_numeric($_GET['id']))
// get the 'id' variable from the URL
$id = $_GET['id'];

$text = "SELECT pk_text, firstLine, textTitle, refrainFirstLine FROM text WHERE pk_text = " .$id;
$text_result = mysql_query($text);
$row = mysql_fetch_array($text_result);

     
    // display records if there are records to display
            // display records in a table
            echo "<h2>Hymn: " . $row['firstLine'] . "</h2>";
            echo "<table border='1' cellpadding='10'>";
            
            // set table headers
            echo "<tr><th>ID</th><th>First Line</th><th>Title</th><th>Refrain</th></tr>";
            
            
                    // set up a row for each record
                    echo "<tr>";
                    echo "<td>" . $row['pk_text'] . "</td>";
                    echo "<td>" . $row['firstLine'] . "</td>";
                    echo "<td>" . $row['textTitle']. "</td>";
                    echo "<td>" . $row['refrainFirstLine']. "</td>";  
                    echo "</tr>";
            
            
            echo "</table>";

            echo "<br />";
    
            echo "<h3>Author Information</h3>";

    $author = "SELECT person.pk_person, person.personName, person.gender, person.birthYear, person.deathYear, author_join.fk_person, author_join.fk_text "
    ."FROM person, author_join "
    ."WHERE author_join.fk_text = " .$id
    ." HAVING author_join.fk_person = person.pk_person";

            if ( $author_result = mysql_query($author)) {
                
                while ($row = mysql_fetch_array($author_result)) {
                //display results in a table

                echo "<table border='1' cellpadding='10'>";
            
                // set table headers
                echo "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Birth Year</th><th>Death Year</th></tr>";
            
            
                    // set up a row for each record
                    echo "<tr>";
                    echo "<td>" . $row['pk_person'] . "</td>";
                    echo "<td>" . $row['personName'] . "</td>";
                    echo "<td>" . $row['gender']. "</td>";
                    echo "<td>" . $row['birthYear']. "</td>";
                    echo "<td>" . $row['deathYear']. "</td>";
                    echo "</tr>";
            
            
                echo "</table>";

                echo "<br />";
                }// closes while loop
            
            }// closes if loop
            ?>
        

<?php
/*
            $mysqli->close();
            }*/
 ?> 

</body>
</html>
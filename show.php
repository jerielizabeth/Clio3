<!doctype html>
<html>
<head>
    <title>Show Page</title>
</head>
<body>
<h2>Item Details Page</h2>
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
            echo "<h3>Hymn: " . $row['firstLine'] . "</h3>";
            echo "<table border='1' cellpadding='10'>";
            
            // set table headers
            echo "<tr><th>Text ID</th><th>First Line</th><th>Title</th><th>Refrain</th><th></th><th></th></tr>";
            
            
                    // set up a row for each record
                    echo "<tr>";
                    echo "<td>" . $row['pk_text'] . "</td>";
                    echo "<td>" . $row['firstLine'] . "</td>";
                    echo "<td>" . $row['textTitle']. "</td>";
                    echo "<td>" . $row['refrainFirstLine']. "</td>";  
                    echo '<td><a href="records.php?id=' . $row[0] . '">Edit</a></td>';
                    echo '<td><a href="delete_text.php?id=' . $row[0] . '">Delete</a></td>';
                    echo "</tr>";
            
            
            echo "</table>";

            echo "<br />";
    
            echo "<h4>Author Information</h4>";

    $author = "SELECT person.pk_person, person.personName, person.gender, person.birthYear, person.deathYear, author_join.fk_person, author_join.fk_text "
    ."FROM person, author_join "
    ."WHERE author_join.fk_text = " .$id
    ." HAVING author_join.fk_person = person.pk_person";

            if ( $author_result = mysql_query($author)) {

                                          
                while ($row = mysql_fetch_array($author_result)) {
                //display results in a table

                    echo "<table border='1' cellpadding='10'>";
            
                    // set table headers
                     echo "<tr><th>Text ID</th><th>Person ID</th><th>Name</th><th>Gender</th><th>Birth Year</th><th>Death Year</th><th></th><th></th></tr>";
                     
                    // set up a row for each record
                    echo "<tr>";
                    echo "<td>" . $row[6] . "</td>";
                    echo "<td>" . $row[0] . "</td>";
                    echo "<td>" . $row[1] . "</td>";
                    echo "<td>" . $row[2] . "</td>";
                    echo "<td>" . $row[3] . "</td>";
                    echo "<td>" . $row[4] . "</td>";
                    echo '<td><a href="records_author.php?id=' . $row[0] . '&text=' .$id .'">Edit</a></td>';
                    echo '<td><a href="delete_author.php?id=' . $row[0] . '&text=' .$row[6] .' ">Delete</a></td>';
                    echo "</tr>";
            
            
                
                }// closes while loop
                echo "</table>";

                echo "<br />";
            }// closes if loop

            else {
                echo "Error showing author";
            }

            //echo "<a href="records.php">Edit this Record</a>"
            ?>
        <p><?php echo '<a href="records_author.php?text=' . $id . '".php">Add Author</a>'; ?></p>
        <p><a href="view.php">Return to All Records</a></p>


<?php
/*
            $mysqli->close();
            }*/
 ?> 

</body>
</html>
<!doctype html>
<html>
<head>
    <title>Show Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>
<body>

<div class="span12">
<h2>Item Details Page</h2>
<?php

//include('connect-db.php');

mysql_connect ("localhost", "root", "root") or die ('Error: . . .');
mysql_select_db("hymns");

// confirm that the 'id' variable has been set
        //if (isset($_GET['id']) && is_numeric($_GET['id']))
// get the 'id' variable from the URL
$id = $_GET['id'];

$text = "SELECT text.pk_text, text.firstLine, text.textTitle, text.refrainFirstLine, person.personName, person.gender, person.birthYear, person.deathYear FROM text, person, author_join WHERE text.pk_text = author_join.fk_text AND person.pk_person = author_join.fk_person AND pk_text = " .$id;
$text_result = mysql_query($text);
$row = mysql_fetch_array($text_result);

     
    // display records if there are records to display
            // display records in a table
            echo "<h3>Hymn: " . $row['firstLine'] . "</h3>";
            echo "<table border='1' cellpadding='10'>";
            
            // set table headers
            echo "<tr><th>Text ID</th><th>First Line</th><th>Title</th><th>Refrain</th></tr>";
            
            
                    // set up a row for each record
                    echo "<tr>";
                    echo "<td>" . $row[0] . "</td>";
                    echo "<td>" . $row[1] . "</td>";
                    echo "<td>" . $row[2]. "</td>";
                    echo "<td>" . $row[3]. "</td>"; 
                    echo "</tr>";
            
            
            echo "</table>";

            echo "<br />";

            echo "<table border='1' cellpadding='10'>";
                echo "<tr><th>Author Name</th> <th>Gender</th><th>Born</th><th>Died</th></tr>";
                    echo "<tr>";
                    echo "<td>" . $row[4]. "</td>"; 
                    echo "<td>" . $row[5]. "</td>"; 
                    echo "<td>" . $row[6]. "</td>"; 
                    echo "<td>" . $row[7]. "</td>";  
                    echo "</tr>";
            echo "</table>";

            echo "<br />";
            echo '<p><a href="records.php?id=' . $row[0] . '">Edit</a></p>';
            echo '<p><a href="delete_text.php?id=' . $row[0] . '">Delete</a></p>';

            echo "<br />";
    mysql_close($text_result);

        //echo "<a href="records.php">Edit this Record</a>"
        ?>
    <p><a href="view-all.php">Return to All Records</a></p>
</div>
</body>
</html>
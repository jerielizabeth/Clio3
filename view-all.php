<!doctype html>
<html>
<head>  
<title>View Records</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>
<body>

<div class="span12">
<h1>Hymn Database</h1>

<form id="search_params" action ="?search_by" method = "post">
        <input type="radio" id="personName" value="personName" name="sort" /><label for="personName">Sort by Author</label>
        <input type="radio" id="firstLine" value="firstLine" name="sort" /><label for="textName">Sort by First Line</label>
        <input type="submit" value = "Submit">
</form>

<?php
// connect to the database
include('connect-db.php');

if (isset($_POST['sort'])) {
        $sort = $_POST['sort'];
}

else {
        $sort = 'personName';
}


if ($result = $mysqli->query("SELECT text.pk_text, text.firstLine, text.textTitle, text.refrainFirstLine, person.personName, person.gender FROM text, person, author_join WHERE text.pk_text = author_join.fk_text AND person.pk_person = author_join.fk_person ORDER BY " . $sort . " asc"))
    {
            // display records if there are records to display
            if ($result->num_rows > 0)
            {
            		echo "<h4>View all records by " .$sort ." </h4>";
                    // display records in a table
                    echo "<table border='1' cellpadding='10'>";
                    
                    // set table headers
                    echo "<tr> <th>ID</th><th>First Line</th> <th>Title</th><th>Refrain</th><th>Author Name</th><th>Author Gender</th> <th></th> <th></th></tr>";
                    
                    while ($row = $result->fetch_row())
                    {
                            // set up a row for each record
                            echo "<tr>";
                            echo '<td>' . $row[0] . '</td>';
                            echo '<td>' . $row[1] . '</td>';
                            echo '<td>' . $row[2] . '</td>';
                            echo '<td>' . $row[3] . '</td>';
                            echo '<td>' . $row[4] . '</td>';
                            echo '<td>' . $row[5] . '</td>';
                            echo '<td><a href="show.php?id=' . $row[0] . '">Show</a></td>';
                            echo '<td><a href="delete-text.php?id=' . $row[0] . '">Delete</a></td>';
                            echo "</tr>";
                        }
                    
                    echo "</table>";
            }
            // if there are no records in the database, display an alert message
            else
            {
                    echo "No results to display!";
            }
    }
    // show an error if there is an issue with the database query
    else
    {
            echo "Error: " . $mysqli->error;
    }
    
    // close database connection
    $mysqli->close();

?>
    <p><a href="records.php">Add New Hymn</a></p>
	<p><a href="search.php">Search Database</a></p>
</div> <!This ends span12 div!>
</body>
</html>
</html>
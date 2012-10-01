<!doctype html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>

<?php
    // connect to the database
    include('connect-db.php');

    // get search variable

    //$name = htmlentities($_POST['name'], ENT_QUOTES);
	$gender = $_POST['gender'];
	//$word = htmlentities($_POST['word'], ENT_QUOTES);
    echo "<p>Search Results for Gender = $gender</p>";
    
	//search by name variable
    $query = "SELECT pk_person, personName, birthYear, deathYear FROM person WHERE gender = " ."'" .$gender ."'" ."ORDER BY personName asc";
    //echo "<p>$query</p>";


    if ($gender !=""){
	   if($result = $mysqli->query($query))
        {
            if ($result->num_rows > 0){

                echo "<table border='1' cellpadding='10'>";
            
                // set table headers
                echo "<tr><th>ID</th><th>Name</th><th>Birth Year</th><th>Death Year</th></tr>";
                while ($row = $result->fetch_array())
                {
                    // display records in a table
                    
                    //echo "help";
                    // set up a row for each record
                    echo "<tr>";
                    echo "<td>" . $row['pk_person'] . "</td>";
                    echo "<td>" . $row['personName'] . "</td>";
                    echo "<td>" . $row['birthYear'] . "</td>";
                    echo "<td>" . $row['deathYear'] . "</td>";
                    echo "</tr>";
                }
            
                echo "</table>";
            }
                                            
        }   
    }
    else {
        echo "help";
    }    
            // display records in a table
                   /* echo "<table border='1' cellpadding='10'>";
                    
                    // set table headers
                    echo "<tr><th>ID</th><th>First Name</th><th>Gender</th><th></th><th></th></tr>";
                    
                    while ($row = $result->fetch_object())
                    {
                            // set up a row for each record
                            echo "<tr>";
                            echo "<td>" . $row->[0] . "</td>";
                            echo "<td>" . $row->[1] . "</td>";
                            echo "<td>" . $row->[2] . "</td>";
                            echo "<td><a href='records.php?id=" . $row->id . "'>Edit</a></td>";
                            echo "<td><a href='delete.php?id=" . $row->id . "'>Delete</a></td>";
                            echo "</tr>";
                    }
                    
                    echo "</table>";
            } //closes check of records
            // if there are no records in the database, display an alert message
            else
            {
                    echo "No results to display!";
            } // closes else loop

    } // closes query



                //$stmt->close();
        }
        // show an error if the query has an error
        else
        {
                echo "Error: could not prepare SQL statement";
        }
    }
    else {
        echo "help";
    }
	/*if ($name = ''){
		$authorQuery = "SELECT * FROM person where personName LIKE %{$name}%";
	
	if ($result = $mysqli->query($authorQuery))
	{
		
	}//closes name search
    
    
*/
    // show an error if there is an issue with the database query
    /*else
    {
            echo "Error: " . $mysqli->error;
    }*/
    
    // close database connection
    //$mysqli->close();

?>



</body>
</html>
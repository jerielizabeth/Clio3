<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<meta content="Jeri Wieringa" name="author">
	<meta content="" name="description">
	<meta content="" name="keywords">
    <title>View: Mining Hymns</title>
    <link rel="stylesheet" href="style.css" media="all">
	<link href='http://fonts.googleapis.com/css?family=Tangerine:700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://jeriwieringa.com/dev/js/jquery.tablesorter.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
); 
	</script>
	
  </head>
  <body>
  	
  	<?php include 'header.php';?>
  	<h3>The Database</h3>
  	<p>These are the texts that survived the culling process. In the end, 31 texts by women remained, in comparison to the 242 texts by men. Rather than dealing at this point with the multiple versions of each hymn in various hymnals, I chose to keep only the oldest version available in the JSON file, in hopes of getting more historically relevant data.</p>

	<p>The table can be sorted by each of the various columns. Clicking on "Details" will open up extended information about the hymn, including the publisher, the date of publication, and the full text.</p>


  		<?php
			// connect to the database
			include('connect-db.php');


			if ($result = $mysqli->query("SELECT hymns.hymns_pk, hymns.firstLine, hymns.textTitle, people.personName, people.gender FROM hymns, people, hymns_people_join WHERE hymns.hymns_pk = hymns_people_join.hymns_fk AND people.people_pk = hymns_people_join.people_fk ORDER BY people.personName"))
			    {
			            // display records if there are records to display
			            if ($result->num_rows > 0)
			            {
			            		echo "<h3>All Records</h3>";
			            		echo "<p><a href='#end'>Jump to the End</a>";
			                    // display records in a table
			                    echo "<table id='myTable' class='tablesorter'>";
			                    
			                    // set table headers
			                    echo "<thead>";
			                    echo "<tr><th class='header'>First Line</th> <th class='header'>Title</th><th class='header'>Author</th><th class='header'>Gender</th><th></th> </tr>";
			                    echo "</thead>";
			                    while ($row = $result->fetch_row())
			                    {
			                            // set up a row for each record
			                            echo "<tr>";
			                            echo '<td>' . $row[1] . '</td>';
			                            echo '<td>' . $row[2] . '</td>';
			                            echo '<td>' . $row[3] . '</td>';
			                            echo '<td>' . $row[4] . '</td>';
			                            echo '<td><a href="records.php?id=' . $row[0] . '">Details</a></td>';
			                            //echo '<td><a href="delete-text.php?id=' . $row[0] . '">Delete</a></td>';
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
		<div id="next">
			<h4><a name="end"><a href="data.php">Previous</a>, <a href= "mining.php">Next</a></a></h4>
			<p><a href="intro.php">Return to Introduction</a></p>
		</div> <! ends next div -->	
				
	</div> <!-- this is the end of the content div -->
	
	<?php include 'footer.php';?>

</body>
</html>
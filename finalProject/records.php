<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<meta content="Jeri Wieringa" name="author">
	<meta content="" name="description">
	<meta content="" name="keywords">
    <title>Records: Mining Hymns</title>
    <link rel="stylesheet" href="style.css" media="all">
	<link href='http://fonts.googleapis.com/css?family=Tangerine:700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	
  </head>
  <body>
  	
  	<?php include 'header.php';?>
  
  	<div id = "single">
  		<?php
  			include('connect-db.php');

  			// get the 'id' variable from the URL
			if (isset($_GET['id'])) {
		        $id = $_GET['id'];
				}


			if ($result = $mysqli->query("SELECT hymns.hymns_pk, hymns.firstLine, hymns.textTitle, hymnals.HymnalName, hymnals.PublisherName, hymnals.City, hymnals.state, hymnals.PublicationYear, hymnals.Notes FROM hymns, hymnals, hymnals_hymns_join WHERE hymns.hymns_pk = hymnals_hymns_join.hymns_fk AND hymnals.hymnals_pk = hymnals_hymns_join.hymnals_fk AND hymns.hymns_pk = " .$id))
			{
				// display records if there are records to display
			            if ($result->num_rows > 0){
		     
					    // display records if there are records to display
					            // display records in a table
					        while ($row = $result->fetch_row())
			                {
					            echo "<h3>Hymn: " . $row[1] . "</h3>";
					            
					            // set table headers
					            echo "<ul>";
					            	echo "<li>Title: " .$row[2] . "</li>";
					            	echo "<li>First Line: " .$row[1] . "</li>";
					            	echo "<li>Hymnal: " . $row[3]. "</li>";
					            	echo "<li>Denomination: " .$row[8] ."</li>";
					            	echo "<li>Publisher: " .$row[4] . "</li>";
					            	echo "<li>Publication Date: " .$row[7]. "</li>";
					            echo "</ul>";
					           }
		            }
		            // if there are no records in the database, display an alert message
		            else
		            {
		                    echo "No results to display!";
		            }
		    }
		    else
			    {
			        echo "Error (query 1): " . $mysqli->error;
			    }

		    if ($result = $mysqli->query("SELECT people.people_pk, people.personName, people.gender, people.birthYear, people.deathYear, hymns.hymns_pk FROM people, hymns, hymns_people_join WHERE hymns.hymns_pk = hymns_people_join.hymns_fk AND people.people_pk = hymns_people_join.people_fk AND hymns.hymns_pk = " .$id))

			{
				echo "<h3>Author(s)</h3>";
				while ($row = $result->fetch_row()){
					
					echo "<ul>";
						echo "<li>Author Name: " .$row[1] . "</li>";
						echo "<li>Born: " .$row[3] . "</li>";
						echo "<li>Died: " .$row[4] . "</li>";
						echo "<li>Gender: " .$row[2] . "</li>";
					echo "</ul>";
				}


			}
			    // show an error if there is an issue with the database query
			    else
			    {
			        echo "Error (query 2): " . $mysqli->error;
			    }
			if ($result = $mysqli->query("SELECT hymns.hymns_pk, hymns.full_text FROM hymns WHERE hymns.hymns_pk = " .$id))
			{
				while ($row = $result->fetch_row()){
					echo "<h3>Full Text</h3>";
					echo "<p>" .$row[1]. "</p>";
				}


			}
			    // show an error if there is an issue with the database query
			    else
			    {
			        echo "Error (query 3): " . $mysqli->error;
			    }
			    
			    // close database connection
			    $mysqli->close();

		        ?>
    <p><a href="view.php">Return to All Records</a></p>
    </div> <! this ends single div -->
    <div id="next">
		<h4><a href="view.php">Previous</a>, <a href= "mining.php">Next</a></h4>
		<p><a href="intro.php">Return to Introduction</a></p>
	</div> <! ends next div -->		

				
	</div> <!-- this is the end of the content div -->
	
	<?php include 'footer.php';?>

</body>
</html>
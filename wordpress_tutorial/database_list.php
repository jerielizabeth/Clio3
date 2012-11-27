<?php get_header(); ?>
		
		<div id="main" role="main" class="<?php brunelleschi_content_class(); ?>">

			<?php the_content();
			include("open_db.php"); 
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
			                    echo "<tr> <th>ID</th><th>First Line</th> <th>Title</th><th>Refrain</th><th>Author Name</th><th>Author Gender</th> <th></th> </tr>";
			                    
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
			                            //echo '<td><a href="show.php?id=' . $row[0] . '">Show</a></td>';
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
		</div><!-- #main -->
<?php if( brunelleschi_options('sidebar') === __('both','brunelleschi')
		|| brunelleschi_options('sidebar') === __('two left','brunelleschi')
		|| brunelleschi_options('sidebar') === __('two right','brunelleschi')){
			get_sidebar('secondary');
		} ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

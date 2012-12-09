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

<?php
// connect to the database
include('connect-db.php');

// number of results to show per page
                $per_page = 25;
                
                // figure out the total pages in the database
                if ($result = $mysqli->query("SELECT text.pk_text, text.firstLine, text.textTitle, text.refrainFirstLine, person.personName, person.gender FROM text, person, author_join WHERE text.pk_text = author_join.fk_text AND person.pk_person = author_join.fk_person ORDER BY personName asc"))
                {
                        if ($result->num_rows != 0)
                        {
                                $total_results = $result->num_rows;
                                // ceil() returns the next highest integer value by rounding up value if necessary
                                $total_pages = ceil($total_results / $per_page);
                                
                                // check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
                                if (isset($_GET['page']) && is_numeric($_GET['page']))
                                {
                                        $show_page = $_GET['page'];
                                        
                                        // make sure the $show_page value is valid
                                        if ($show_page > 0 && $show_page <= $total_pages)
                                        {
                                                $start = ($show_page -1) * $per_page;
                                                $end = $start + $per_page; 
                                        }
                                        else
                                        {
                                                // error - show first set of results
                                                $start = 0;
                                                $end = $per_page; 
                                        }               
                                }
                                else
                                {
                                        // if page isn't set, show first set of results
                                        $start = 0;
                                        $end = $per_page; 
                                }
                                
                                // display pagination
                                echo "<p><b>View Page:</b> ";
                                for ($i = 1; $i <= $total_pages; $i++)
                                {
                                        if (isset($_GET['page']) && $_GET['page'] == $i)
                                        {
                                                echo $i . " ";
                                        }
                                        else
                                        {
                                                echo "<a href='view.php?page=$i'>$i</a> ";
                                        }
                                }
                                echo "</p>";
                                
                                // display data in table
                                echo "<table border='1' cellpadding='10'>";
                                echo "<tr> <th>ID</th><th>First Line</th> <th>Title</th><th>Refrain</th><th>Author Name</th><th>Author Gender</th> <th></th> <th></th></tr>";
                        
                                // loop through results of database query, displaying them in the table 
                                for ($i = $start; $i < $end; $i++)
                                {
                                        // make sure that PHP doesn't try to show results that don't exist
                                if ($i == $total_results) { break; }
                                
                                        // find specific row
                                        $result->data_seek($i);
                                                $row = $result->fetch_row();
                                                
                                                // echo out the contents of each row into a table
                                echo "<tr>";
                                echo '<td>' . $row[0] . '</td>';
                                echo '<td>' . $row[1] . '</td>';
                                echo '<td>' . $row[2] . '</td>';
                                echo '<td>' . $row[3] . '</td>';
                                echo '<td>' . $row[4] . '</td>';
                                echo '<td>' . $row[5] . '</td>';
                                echo '<td><a href="show.php?id=' . $row[0] . '">Show</a></td>';
                                //echo '<td><a href="records.php?id=' . $row[0] . '">Edit</a></td>';
                                echo '<td><a href="delete-text.php?id=' . $row[0] . '">Delete</a></td>';
                                echo "</tr>";
                                }

                                // close table>
                                echo "</table>";
                        }
                        else
                        {
                                echo "No results to display!";
                        } 
                }
                // error with the query
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
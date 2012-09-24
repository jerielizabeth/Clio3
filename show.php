<?php

include('connect-db.php');

// confirm that the 'id' variable has been set
        if (isset($_GET['id']) && is_numeric($_GET['id']))
        {
                // get the 'id' variable from the URL
                $id = $_GET['id'];

                echo $id;
                
                $query = "SELECT fk_person FROM author_join WHERE fk_text = ? LIMIT 1";

                // show authors ids
                if ($mysqli->query($query) == TRUE)
                {
                    printf("hello");
                }
                else
                {
                        echo "ERROR: could not prepare SQL statement.";
                }

                $mysqli->close();
            }
 ?>
<?php

        // connect to the database
        include('connect-db.php');
        
        // confirm that the 'id' variable has been set
        if (isset($_GET['id']) && is_numeric($_GET['id']))
        {
                // get the 'id' variable from the URL
                $id = $_GET['id'];
                
                // delete record from database
                if ($stmt = $mysqli->prepare("DELETE FROM text WHERE pk_text = ? LIMIT 1"))
                {
                        $stmt->bind_param("i",$id);     
                        $stmt->execute();
                        $stmt->close();

                        $stmt = $mysqli->prepare ("DELETE FROM author_join WHERE fk_text = ?");
                                $stmt->bind_param("i", $id);
                                $stmt->execute();
                                $stmt->close();

                }

                else
                        
                {
                        echo "ERROR: could not prepare SQL statement.";
                }
                $mysqli->close();
                
                // redirect user after delete is successful
                header("Location: view.php");
        }
        else
        // if the 'id' variable isn't set, redirect the user
        {
                header("Location: error.html");
        }

?>
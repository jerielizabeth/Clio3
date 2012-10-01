<?php
        /*
                Allows the user to both create new records and edit existing records
        */

        // connect to the database
        include("connect-db.php");

        // creates the new/edit record form
        // since this form is used multiple times in this file, I have made it a function that is easily reusable
        function renderForm($title = '', $fline = '', $refrain = '', $error = '', $id = '')
        { ?>
        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
        <html>
            <head>  
                <title>
                        <?php if ($id != '') { echo "Edit Record"; } else { echo "New Record"; } ?>
                </title>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        </head>
        <body>
                <h1><?php if ($id != '') { echo "Edit Record"; } else { echo "New Record"; } ?></h1>
                <?php if ($error != '') {
                        echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error
                                . "</div>";
                } ?>
                
                <form action="" method="post">
                
                    <?php if ($id != '') { ?>
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <p>ID: <?php echo $id; ?></p>
                    <p><strong>First Line:</strong> <?php echo $fline; ?> </p>
                    <?php } ?>
                    
                    <strong>Hymn Title: </strong> <input type="text" name="textTitle"
                            value="<?php echo $title; ?>"/><br/>
                    <strong>First Line:*</strong> <input type="text" name="firstLine"
                            value="<?php echo $fline; ?>"/><br />
                    <strong>Refrain First Line: </strong> <input type="text" name="refrainFirstLine"
                            value="<?php echo $refrain; ?>"/><br />
                    <p>*Required</p>
                    
                    <input type="submit" name="submit" value="Submit" />
                
                </form>
            </body>
        </html>
                
        <?php }



        /*

           EDIT RECORD

        */
        // if the 'id' variable is set in the URL, we know that we need to edit a record
        if (isset($_GET['id']))
        {
                // if the form's submit button is clicked, we need to process the form
                if (isset($_POST['submit']))
                {
                        // make sure the 'id' in the URL is valid
                        if (is_numeric($_POST['id']))
                        {
                                // get variables from the URL/form
                                $id = $_POST['id'];
                                $fline = htmlentities($_POST['firstLine'], ENT_QUOTES);
                                $title = htmlentities($_POST['textTitle'], ENT_QUOTES);
                                $refrain = htmlentities($_POST['refrainFirstLine'], ENT_QUOTES);
                                //$name = htmlentities($_POST['personName'], ENT_QUOTES);
                                
                                // check that firstname and lastname are both not empty
                                if ($fline == '')
                                {
                                        // if they are empty, show an error message and display the form
                                        $error = 'ERROR: Please fill in all required fields!';
                                        renderForm($title, $fline, $refrain, $error, $id);
                                }
                                else
                                {
                                        // if everything is fine, update the record in the database
                                        if ($stmt = $mysqli->prepare("UPDATE text SET firstLine = ?, textTitle = ?, refrainFirstLine = ? WHERE pk_text = " ."'" .$id ."'"))
                                        {
                                                $stmt->bind_param("sssi", $fline, $title, $refrain, $id);
                                                $stmt->execute();
                                                $stmt->close();
                                        }
                                        // show an error message if the query has an error
                                        else
                                        {
                                                echo "ERROR: could not prepare SQL statement.";
                                        }
                                        
                                        // redirect the user once the form is updated
                                        header("Location: view.php");
                                }
                        }
                        // if the 'id' variable is not valid, show an error message
                        else
                        {
                                echo "Error!";
                        }
                }
                // if the form hasn't been submitted yet, get the info from the database and show the form
                else
                {
                        // make sure the 'id' value is valid
                        if (is_numeric($_GET['id']) && $_GET['id'] > 0)
                        {
                                // get 'id' from URL
                                $id = $_GET['id'];
                                
                                // get the recod from the database
                                if($stmt = $mysqli->prepare("SELECT textTitle, firstLine, refrainFirstLine FROM text WHERE pk_text=".$id))
                                {
                                        $stmt->bind_param("i", $id);
                                        $stmt->execute();
                                        
                                        $stmt->bind_result($title, $fline, $refrain);
                                        $stmt->fetch();
                                        
                                        // show the form
                                        renderForm($title, $fline, $refrain, NULL, $id);
                                        
                                        $stmt->close();
                                }
                                // show an error if the query has an error
                                else
                                {
                                        echo "Error: could not prepare SQL statement";
                                }
                        }
                        // if the 'id' value is not valid, redirect the user back to the view.php page
                        else
                        {
                                header("Location: view.php");
                        }
                }
        }



        /*

           NEW RECORD

        */
        // if the 'id' variable is not set in the URL, we must be creating a new record
        else
        {
                // if the form's submit button is clicked, we need to process the form
                if (isset($_POST['submit']))
                {
                        // get the form data
                        $title = htmlentities($_POST['textTitle'], ENT_QUOTES);
                        $fline = htmlentities($_POST['firstLine'], ENT_QUOTES);
                        $refrain = htmlentities($_POST['refrainFirstLine'], ENT_QUOTES);
                        
                        // check that firstname and lastname are both not empty
                        if ($fline == '')
                        {
                                // if they are empty, show an error message and display the form
                                $error = 'ERROR: Please fill in all required fields!';
                                renderForm($title, $fline, $refrain, $error);
                        }
                        else
                        {
                                // insert the new record into the database
                                if ($stmt = $mysqli->prepare("INSERT INTO text (textTitle, firstLine, refrainFirstLine) VALUES (?, ?, ?)"))
                                {
                                        $stmt->bind_param("sss", $title, $fline, $refrain);
                                        $stmt->execute();
                                        $stmt->close();
                                }
                                // show an error if the query has an error
                                else
                                {
                                        echo "ERROR: Could not prepare SQL statement.";
                                }
                                
                                // redirec the user
                                header("Location: view.php");
                        }
                        
                }
                // if the form hasn't been submitted yet, show the form
                else
                {
                        renderForm();
                }
        }
        
        // close the mysqli connection
        $mysqli->close();
?>
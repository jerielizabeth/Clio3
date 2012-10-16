<?php
function renderForm($ = '', $ ='', $ = '', $id = '')
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
<div>
        <?php if ($id != '') { ?>
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <p>ID: <?php echo $id; ?></p>
        <?php } ?>

        <h3>Hymn Information</h3>
        *Hymn Title (required): <input type="text" name="title" value="<?php echo $title; ?>"/><br />
        *First Line (required): <input type="text" name="fline" value="<?php echo $fline; ?>"/><br />
        Refrain, First Line: <input type="text" name="refrain" value="<?php echo $refrain; ?>"/><br />
        Language: <input type="text" name="language" value="<?php echo $lang; ?>"/><br />
        <br />
        <h3>Author Information</h3>
        Author Name:<input type="text" name="name" value="<?php echo $name; ?>"/><br />
        Gender: <input type="radio" name="gender" value="F">Female <input type="radio" name="gender" value="M"> Male<br />
        Birth Year: <input type="text" name="byear" value="<?php echo $byear; ?>"/><br />
        Death Year: <input type="text" name="dyear" value="<?php echo $dyear; ?>"/><br />
        <input type="submit" name="add" id="add" value="Submit" <?php echo $last; ?>/>
</div>
</form>
</body>
</html>

        <?php }
?>
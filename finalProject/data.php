<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<meta content="Jeri Wieringa" name="author">
	<meta content="" name="description">
	<meta content="" name="keywords">
    <title>Data: Mining Hymns</title>
    <link rel="stylesheet" href="style.css" media="all">
	<link href='http://fonts.googleapis.com/css?family=Tangerine:700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	
  </head>
  <body>
  	
  	<?php include 'header.php';?>
  	<div id="main">
      <h3>Data: Sources and Selection</h3>
      <p>The data source for this experiment is the database <a href="http://www.hymnary.org">Hymnary.org</a>. The database is a relatively young project housed out of Calvin College in Grand Rapids, MI and the digitization of hymnals is powered in significant part by volunteer effort. It is an example of a crowd sourced project that serves a community need and also benefits from institutional support.</p>
      <p>One benefit of using the Hymnary database is that the data is easily exportable. A CSV dump of the texts, tunes, hymnals, and people is available for download. In addition, the search results for particular hymn texts is available in JSON format. These two export features made the database a promising option as a datasource.</p>
      <p>While the initial dump of the data was promising, the process of whittling down the data into a manageable size resulted in some problematic discoveries. I began by isolating the authors born between 1800 and 1809. I was interested in songs that were written during the middle of the century, and chose this range as those born at the beginning of the century would be in their mature years during the middle. I isolated the songs that were documented as having been written by these authors and downloading the associated JSON files. While this resulted in a large amount of data, further investigation of the JSON files revealed that many were empty. As a consequence, many of the authors identified at first had no transcribed hymns in the database. The original set of over a thousand hymns was reduced to a couple hundred with complete information.</p>

  	</div>
  	<div id="sidebar">
  	<figure>
    <img src="images/millennial-praises-shaker-hymnal-christian-goodwillie-hardcover-cover-art.jpg" alt="Millennium Hymnal" width="210" height="260" />
    <figcaption>Shaker Songbook</figcaption>
  </figure>
    </div>
  	
		<div id="next">
		<h4><a href="intro.php">Previous</a>, <a href= "view.php">Next</a></h4>
		<p><a href="intro.php">Return to Introduction</a></p>
	</div> <! ends next div -->					
	</div> <!-- this is the end of the content div -->	
	<?php include 'footer.php';?>

</body>
</html>
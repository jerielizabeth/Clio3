<!DOCTYPE html>
<html lang="en">
  <head>
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<meta content="Jeri Wieringa" name="author">
	<meta content="" name="description">
	<meta content="" name="keywords">
  <title>Map: Mining Hymns</title>
  <link rel="stylesheet" href="style.css" media="all">
  <link href='http://fonts.googleapis.com/css?family=Tangerine:700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script src="js/mymap-google.js"></script>

  <style>
  html, body, #map_canvas {
    margin: auto;
    padding: 0;
    height: 600px;
    width: 960px;
}
  </style>
	
  </head>
  <body onload="initialize()">
  	
  	<?php include 'header.php';?>
    <h3>Geolocating Publishers</h3>
<p>In addition to looking at patterns in the textual data, mapping the location of the various publishers offers a way to see the hymns differently. In this map, all the publishers with location information have been geolocated. </p>
<p>Despite the possibilities that mapping holds, this map in particular reveals very little of interest. Because of the wide variety within the JSON files as to the earliest publication date, the publishers marked here include both 19th-century publishers and publishers from the late twentieth century.</p>
  	
  		<!--Calling our JavaScript function when the page loads-->
          <!--Empty <div> tag for the map. Give it an ID to reference in the JavaScript file-->
      <div id="map_canvas"></div>
  				
	<div id="next">
      <h4><a name="end"><a href="modelsplit.php">Previous</a>, <a href= "mapmycountry.php">Next</a></a></h4>
      <p><a href="intro.php">Return to Introduction</a></p>
    </div> <! ends next div -->
  </div> <!-- this is the end of the content div -->
	
	<?php include 'footer.php';?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<meta content="Jeri Wieringa" name="author">
	<meta content="" name="description">
	<meta content="" name="keywords">
  <title>Mapping 'My Country..': Mining Hymns</title>
  <link rel="stylesheet" href="style.css" media="all">
  <link href='http://fonts.googleapis.com/css?family=Tangerine:700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="http://www.jeriwieringa.com/dev/timemap/mxn/mxn.js?(googlev3)"></script>
    <script type="text/javascript" src="http://www.jeriwieringa.com/dev/timemap/timeline-1.2.js"></script>
    <script src="http://www.jeriwieringa.com/dev/timemap/timemap.js" type="text/javascript"></script>
    <script src="http://www.jeriwieringa.com/dev/timemap/param.js" type="text/javascript"></script>
    <script src="http://www.jeriwieringa.com/dev/timemap/loaders/xml.js" type="text/javascript"></script>
    <script src="http://www.jeriwieringa.com/dev/timemap/loaders/kml.js" type="text/javascript"></script>
    <script type="text/javascript">
     
    // variable "tm" below initiates the map and includes the required buckets in which we will put our TimeMap
    var tm;
    $(function() {
     
        tm = TimeMap.init({
            mapId: "map",               // Id of map div element (required)
            timelineId: "timeline",     // Id of timeline div element (required)
            options: {
                eventIconPath: "http://www.jeriwieringa.com/dev/timemap/images/" // Loads the appropriate icons for the mep. Point this URL to the "images" file from your TimeMap download on your server.
            },
            datasets: [
                    {
                    title: "Publications containing 'My Country 'Tis of Thee'",
                    theme: "red",    // You can choose from any of Timeline's color themes. 
                    type: "kml",     // Data to be loaded in KML, change for other sources - must be a local URL
                    options: {
                        url: "maps/mycountry.kml" // KML file to load
                        }
                    }
            ],
            bandIntervals: [
                Timeline.DateTime.YEAR,  // You can load a maximum of two timebands without adjusting your code.
                Timeline.DateTime.DECADE,  // You can load a maximum of two timebands without adjusting your code.
            ]
        });
     
        // set the map to our custom style
        var gmap = tm.getNativeMap();
        gmap.mapTypes.set("white", styledMapType);
        gmap.setMapTypeId("white");
    });
    </script>

  <style>
  div#help {
font-size: 12px;
width: 45em;
padding: 1em;
}
 
div#timemap {
padding: 1em;
}
 
div#timelinecontainer{
width: 100%;
height: 150px;
}
 
div#timeline{
 width: 100%;
 height: 100%;
 font-size: 12px;
 background: #CCCCCC;
}
 
div#mapcontainer {
 width: 100%;
 height: 400px;
}
 
div#map {
 width: 100%;
 height: 100%;
 background: #EEEEEE;
}
 
div.infotitle {
    font-size: 14px;
    font-weight: bold;
}
div.infodescription {
    font-size: 14px;
    font-style: italic;
}
 
div.custominfostyle {
    font-size: 1.5em;
    font-style: italic;
    width: 20em;
}
  </style>
	
  </head>
  <body onload="initialize()">
  	
  	<?php include 'header.php';?>
    <h3>Mapping over Space and Time</h3>
    <p>In contrast, focusing on the publication history of a particular text over time is a more promising line of inquiry. In the map below, the publication history of one hymn, "My Country 'Tis of Thee," is traced over time. The tracing of hymns across traditions and over time offers a window into how the text spreads and which traditions pick up the text at which times. Sales data for the publishers would further expand the picture of where different religious texts were popular at what times.</p>

  	
  		<!--Calling our JavaScript function when the page loads-->
   
          <!--Empty <div> tag for the map. Give it an ID to reference in the JavaScript file-->
      <div id="timemap">
        <div id="timelinecontainer">
          <div id="timeline"></div>
        </div>
        <div id="mapcontainer">
          <div id="map"></div>
        </div>
      </div>
    				
	<div id="next">
    <h4><a href="map.php">Previous</a>, <a href= "conclusion.php">Next</a></h4>
    <p><a href="intro.php">Return to Introduction</a></p>
  </div> <! ends next div --> 
  </div> <!-- this is the end of the content div -->

	<?php include 'footer.php';?>

</body>
</html>
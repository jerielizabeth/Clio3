<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<meta content="Jeri Wieringa" name="author">
	<meta content="" name="description">
	<meta content="" name="keywords">
    <title>Word Associations: Mining Hymns</title>
    <link rel="stylesheet" href="style.css" media="all">
	<link href='http://fonts.googleapis.com/css?family=Tangerine:700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>

      <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
      ["Word","Frequency"],
      ["heavn",0.94],
      ["name",0.94],
      ["precious",0.94],
      ["bowing",0.93],
      ["complete",0.93],
      ["guard",0.93],
      ["kings",0.93],
      ["prostrate",0.93],
      ["round",0.93],
      ["snare",0.93],
      ["temptations",0.93],
      ["thrills",0.93],
      ["tongues",0.93],
      ["whereer",0.93],
      ["joy",0.91],
      ["hope",0.85],
      ["sweet",0.83]
        ]);
      
        // Create and draw the visualization.
        new google.visualization.ColumnChart(document.getElementById('visualizationB')).
            draw(data,
                 {title:"Words Associated with 'earth', by Female Authors",
                  width:700, height:400,
                  hAxis: {title: "Associated Words"}}
            );
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script> 
        <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
["Word","Frequency"],
["counterpart   ",1],
["male",1],
["penetrate",1],
["shined",1],
["hoary",0.95],
["wisdoms  ",0.87],
["matters   ",0.86],
["nature ",0.86],
["downward  ",0.81],
["sprung   ",0.81],
["fiery ",0.8],
["reigns  ",0.8],
["limbs  ",0.78],
["root ",0.77]
        ]);
      // Create and draw the visualization.
        new google.visualization.ColumnChart(document.getElementById('visualizationC')).
            draw(data,
                 {title:"Words Associated with 'female', by Male Authors",
                  width:700, height:400,
                  hAxis: {title: "Associated Words"}}
            );
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
["Words","Frequency"],
["flowing",0.94],
["glory",0.82],
["arrayed",0.8],
["band",0.8],
["bathed",0.8],
["dwelling",0.8],
["fade",0.8],
["flood",0.8],
["forgiven",0.8],
["joys",0.8],
["robes",0.8],
["spotless",0.8],
["thousands",0.8],
["wash ",0.8],
["singing",0.76],
["white",0.7],
["blood",0.63],
["stand",0.62]
        ]);
      
        // Create and draw the visualization.
        new google.visualization.ColumnChart(document.getElementById('visualizationD')).
            draw(data,
                 {title:"Words Associated with 'Children', by Female Authors",
                  width:700, height:400,
                  hAxis: {title: "Associated Words"}}
            );
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body>
  	
  	<?php include 'header.php';?>

  	<div id="single">

  
    <h3>Word Associations</h3>
    <p>Along with frequencies, word associations offer another interesting glimpse into the themes across the various texts. Here I have taken a couple of frequent words to plot the words associated with them. One common interpretation of gendered language is that "earth" and materiality is associated with women and carries a negative connotation. It is interesting here that, across the texts written by women, positive words such as "precious" and "thrills" occur along side of negative words such as "temptations" and "snares." </p>


  <div id="visualizationB"></div>
<p>The words associated with "children" point to it being used to describe not biological children, but the hymn-writer and singer's status as child of the divine.</p>
  <div id="visualizationD"></div>
<p>While the female authors in this sample do not speak directly about "women" or "men", the male authors do offer some telling associations when speaking of women. However, I am hesitant to conclude too much from this data, as the string of associations at '1' makes me think that "female" only occurs in a few, if not one, text. In addition, the words associated with "male" are the same, which also indicates that the same document or documents are being looked at.</p>
  <div id="visualizationC"></div>
  <br>
  <hr>
      <h3>Dendrograms</h3>
      <p>The dendrogram offers another way of comparing word associations across the texts. Words more likely to appear together or documents that are similar to each other are both grouped together and are placed on a similar horizontal plane. The dendrogram can be generated for document term matrices and term document matrices. As you can see below, the term document matrix is far more informative when dealing with a large number of texts. </p>

      <h4 class="block">Document Term Matrix vs. Term Document Matrix</h4>
      <figure>
          <a href="images/hadtm_rmsparse(.8).png"><img src="images/hadtm_rmsparse(.8).png" alt="All Hymns, Document Term Matrix" width="260" height="210" /></a>
        <figcaption>All Hymns</br>Document Term Matrix</figcaption>
    </figure>
    <figure>
          <a href="images/hatdm_rmsparse(.8).png"><img src="images/hatdm_rmsparse(.8).png" alt="All Hymns, Term Document Matrix" width="260" height="210" /></a>
        <figcaption>All Hymns</br>Term Document Matrix</figcaption>
    </figure>
    <h4 class="block">Differences in Language between Male and Female Authors</h4>
    <p>Again, we see similar patterns with some interesting differences between male and female authors. Of particular note is that "earth" and "joy" are strongly associated across the texts by female authors where "earth" is associated with "father" and "soul" in the texts by male authors.</p>

    <figure>
          <a href = "images/hmtdm_rmsparse(.8).png"><img src="images/hmtdm_rmsparse(.8).png" alt="Hymns by Male Authors, Term Document Matrix" width="260" height="210" /></a>
        <figcaption>Hymns by Male Authors</br>Term Document Matrix</figcaption>
    </figure>
    <figure>
          <a href = "images/hwtdm_rmsparse(.8).png"><img src="images/hwtdm_rmsparse(.8).png" alt="Hymns by Female Authors, Term Document Matrix" width="260" height="210" /></a>
        <figcaption>Hymns by Female Authors</br>Term Document Matrix</figcaption>
    </figure>
    <h4 class="block">Situations where the Document Term Matrix is useful</h4>
    <p>Finally, the document term matrix can be useful when dealing with a more restricted set of texts. Using this data we can begin to identify similarities between authors that may point to areas for further research.</p>

    <figure>
          <a href="images/hwdtm_rmsparse(.8).png"><img src="images/hwdtm_rmsparse(.8).png" alt="Hymns by Female Authors, Document Term Matrix" width="260" height="210" /></a>
        <figcaption>Hymns by Female Authors</br>Document Term Matrix</figcaption>
    </figure>
  	</div>
				
		<div id="next">
		<h4><a href="mining.php">Previous</a>, <a href= "models.php">Next</a></h4>
		<p><a href="intro.php">Return to Introduction</a></p>
	</div> <! ends next div -->					
	</div> <!-- this is the end of the content div -->	
	<?php include 'footer.php';?>

</body>
</html>
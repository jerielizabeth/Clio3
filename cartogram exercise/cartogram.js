// need to declare these variables outside the functions 
// so we can reference them anywhere.
var myjson = {};
var intid; 

// this function is called form the HTML once the document is loaded (via the ondocumentready shortcut method from jQuery)
function begin(){

  //  for variety, i have used jQuery to load my json object to remind you that
  //    a) it doesn't matter how you load the json object
  //    b) you can use jquery in thse files as well (not just on the HTML page); much more in the animate function, too.
  $.getJSON("http://fredgibbs.net/clio3workspace/d3cartogram-master2/data/stateData.json", function(json) {
    myjson = json;
    console.log(myjson); // always good to check that we have the data we expect.
    render(); // notice that this function call is within the callback anonymous function for the .getJSON, so it won't run until our data is loaded.
   });
}

function render() {
  var startYear = $( "#slider" ).slider( "option", "min" ); // get the minimum value of the slider (the first year we'll have data for)
  console.log("starting year: " + startYear);
  var svg = d3.select("#chart").append("svg")
      .attr("width", 960)
      .attr("height", 500);

  d3.json("http://fredgibbs.net/clio3workspace/d3cartogram-master2/data/us-statess.json", function(json) {
    var path = d3.geo.path();

    // A thick black stroke for the exterior.
    svg.append("g")
      .attr("class", "black")
      .selectAll("path")
      .data(json.features)
      .enter().append("path")
      .attr("d", path);

    // The polygons, scaled!
    svg.append("g")
      .attr("class", "grey")
      .selectAll("path")
      .data(json.features)
      .enter().append("path")
      .attr("d", path)
      .attr("transform", function(d) {
        var curstate = d.properties.name;
        var centroid = path.centroid(d),
              x = centroid[0],
              y = centroid[1];
          return "translate(" + x + "," + y + ")"
              + "scale(" + Math.sqrt(myjson[startYear.toString()][curstate] * 5 || 0) + ")"
              + "translate(" + -x + "," + -y + ")";
      })
      .style("stroke-width", function(d) {
          return 1;
      });

  });

}


function redraw(newYear) {
  console.log("redrawing for " + newYear); // let's check to see that we're doing what we expect.
  
  var path = d3.geo.path();

  d3.selectAll(".grey path")
    .transition()
      .duration(600)
      .attr("transform", function(d) {
        var curstate = d.properties.name;
        var centroid = path.centroid(d),
          x = centroid[0],
          y = centroid[1];

        newScaleFactor = Math.sqrt(myjson[newYear.toString()][curstate] * 5 || 0);

        return "translate(" + x + "," + y + ")" 
            + "scale(" + newScaleFactor + ")"
            + "translate(" + -x + "," + -y + ")";
      })
      .style("stroke-width", function(d) {
        return 1;
      });
//});
}


//  This function is called from the HTML page whenever the checkbox is changed (clicked or unclicked).
function animate(value) {

  if ($('#check').is(':checked')) { // if the checkbox was just checked by the user
    // setInterval is a javascript function that automatically runs some function after every specificed length of time
    // when you call it, it returns an id so that you can cancel or modify it later.
    intid = setInterval(function() { 
      console.log(value); // print current year in the console
      var step = $( "#slider" ).slider( "option", "step" ); // get the value of 'step' that is set in the HTML page
      value = value + step;
      
      $( "#slider" ).slider({'value':value}); // move the slide over by setting its 'value' property 
    }, 500); // wait 500 milliseconds before advancing the slider again.
  }
  else{
    clearInterval(intid);
  }
} // end animate function

<!DOCTYPE html>
<meta charset="utf-8">
<style>

.states {
  fill: none;
  stroke: #fff;
  stroke-width: 1.5px;
}

.RdBu .q0-5{fill:rgb(202,0,32)}
.RdBu .q1-5{fill:rgb(244,165,130)}
.RdBu .q2-5{fill:rgb(247,247,247)}
.RdBu .q3-5{fill:rgb(146,197,222)}
.RdBu .q4-5{fill:rgb(5,113,176)}

</style>
<body>
<script src="http://d3js.org/d3.v3.min.js"></script>
<script src="http://d3js.org/queue.v1.min.js"></script>
<script>

var width = 960,
    height = 500;

var quantize = d3.scale.quantize()
    .domain([0, 100])
    .range(d3.range(5).map(function(i) { return "q" + i + "-5"; }));

var path = d3.geo.path();

var svg = d3.select("body").append("svg")
    .attr("width", width)
    .attr("height", height)
    .attr("class", "Blues");

queue()
    .defer(d3.json, "us-statess.json")
    .defer(d3.json, "mystatesdata.json")
    .await(ready);

function ready(error, states, representatives) {
  var rateById = {};

  representatives.forEach(function(d) { rateById[d.id] = +d.rate; });

  svg.append("g")
      .attr("class", "counties")
    .selectAll("path")
      .data(counties.features)
    .enter().append("path")
      .attr("class", function(d) { return quantize(rateById[d.id]); })
      .attr("d", path);

  svg.append("path")
      .datum(states)
      .attr("class", "states")
      .attr("d", path);
}

</script>
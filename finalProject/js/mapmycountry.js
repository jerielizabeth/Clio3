// variable "tm" below initiates the map and includes the required buckets in which we will put our TimeMap
    var tm;
    $(function() {
     
        tm = TimeMap.init({
            mapId: "map",               // Id of map div element (required)
            timelineId: "timeline",     // Id of timeline div element (required)
            options: {
                eventIconPath: "timemap/images/" // Loads the appropriate icons for the mep. Point this URL to the "images" file from your TimeMap download on your server.
            },
            datasets: [
                    {
                    title: "Executions for Witchcraft",
                    theme: "red",    // You can choose from any of Timeline's color themes. 
                    type: "kml",     // Data to be loaded in KML, change for other sources - must be a local URL
                    options: {
                        url: "maps/my_country.kml" // KML file to load
                        }
                    }
            ],
            bandIntervals: [
                Timeline.DateTime.YEAR,  // You can load a maximum of two timebands without adjusting your code.
            ]
        });
     
        // set the map to our custom style
        var gmap = tm.getNativeMap();
        gmap.mapTypes.set("white", styledMapType);
        gmap.setMapTypeId("white");
    });
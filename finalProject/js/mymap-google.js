var map;
 
      function initialize() {
       //Setting the initial zoom level, initial center point (U.S. Capitol), and using the Google Road Map
        var mapOptions = {
          zoom: 5,
          center: new google.maps.LatLng(40.426042,-91.236794),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
 
        map = new google.maps.Map(document.getElementById('map_canvas'),
            mapOptions);
        //Creating layer with address markers
        //KML file has to be publicly available, so it has to be on your live site. Call by full URL.
        var addressLayer = new google.maps.KmlLayer('http://jeriwieringa.com/dev/maps/hymnals_all.kml');
            addressLayer.setMap(map);
      }

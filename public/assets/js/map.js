      var side_bar_html = ""; 
      var gmarkers = []; 
      var map = null;
      var circle = null;
      var geocoder = new google.maps.Geocoder();

function createMarker(latlng, name, html) {
    var contentString = html;
    var marker = new google.maps.Marker({
        position: latlng,
        title: name,
        zIndex: Math.round(latlng.lat()*-100000)<<5
        });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(contentString); 
        infowindow.open(map,marker);
        });
    gmarkers.push(marker);
    side_bar_html += '<a href="javascript:myclick(' + (gmarkers.length-1) + ')">' + name + '<\/a><br>';
}
 
function myclick(i) {
  google.maps.event.trigger(gmarkers[i], "click");
}

function initialize() {
      var query = location.search.substring(1);
      var pairs = query.split("&");
      for (var i=0; i<pairs.length; i++) {
	var pos = pairs[i].indexOf("=");
	var argname = pairs[i].substring(0,pos).toLowerCase();
	var value = pairs[i].substring(pos+1).toLowerCase();
 
        if (argname == "radius") {
          document.getElementById("radius").value = unescape(value);
          codeAddress();
        }
        if (argname == "address") {
          document.getElementById("address").value = unescape(value);
          codeAddress();
        }
      }
  // create the map
  var myOptions = {
    zoom: 8,
    center: new google.maps.LatLng(43.907787,-79.359741),
    mapTypeControl: true,
    mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
    navigationControl: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }

  map = new google.maps.Map(document.getElementById("map_canvas"),
                                myOptions);
//  google.maps.event.addListener(map, 'bounds_changed', makeSidebar);
//  google.maps.event.addListener(map, 'center_changed', makeSidebar);

  google.maps.event.addListener(map, 'click', function() {
    infowindow.close();
  });

  // Read the data from example.xml
  /*downloadUrl("cga-3_gndc_harvard_edu_cluster.xml", function(doc) {
    var xmlDoc = xmlParse(doc);
    var markers = xmlDoc.documentElement.getElementsByTagName("marker");
    for (var i = 0; i < markers.length; i++) {
      var lat = parseFloat(markers[i].getAttribute("lat"));
      var lng = parseFloat(markers[i].getAttribute("lng"));
      var point = new google.maps.LatLng(lat,lng);
      var id = markers[i].getAttribute("id");
      var country = markers[i].getAttribute("country");
      var html="<b>"+country+"</b><br>"+id;
      // create the marker
      var marker = createMarker(point,country+" "+id,html);
    }
    // put the assembled side_bar_html contents into the side_bar div
    document.getElementById("side_bar").innerHTML = side_bar_html;
  });*/
}

function makeSidebar() {
   side_bar_html = "";
   for (var i=0; i < gmarkers.length; i++){
     if (map.getBounds().contains(gmarkers[i].getPosition())) {
       // add a line to the side_bar html
       side_bar_html += '<a href="javascript:myclick(' + i + ')">' + gmarkers[i].title + '<\/a><br>';
     }
   }
   // put the assembled side_bar_html contents into the side_bar div
   document.getElementById("side_bar").innerHTML = side_bar_html;
}
        

      function codeAddress() {
        var address = document.getElementById('address').value;
        var radius = parseInt(document.getElementById('radius').value, 10)*1000;
        geocoder.geocode( { 'address': address}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            side_bar_html = "";
            map.setCenter(results[0].geometry.location);
            var searchCenter = results[0].geometry.location;
            /*
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
            */
            if (circle) circle.setMap(null);
            circle = new google.maps.Circle({center:searchCenter,
                                             radius: radius,
                                             fillOpacity: 0.35,
                                             fillColor: "#FF0000",
                                             map: map});
            var bounds = new google.maps.LatLngBounds();
	    var foundMarkers = 0;
            for (var i=0; i<gmarkers.length;i++) {
              if (google.maps.geometry.spherical.computeDistanceBetween(gmarkers[i].getPosition(),searchCenter) < radius) {
                bounds.extend(gmarkers[i].getPosition())
                gmarkers[i].setMap(map);
                // add a line to the side_bar html
                side_bar_html += '<a href="javascript:myclick(' + i + ')">' + gmarkers[i].title + '<\/a><br>';
		foundMarkers++;
              } else {
                gmarkers[i].setMap(null);
              }
            }
            // put the assembled side_bar_html contents into the side_bar div
            document.getElementById("side_bar").innerHTML = side_bar_html;
            if (foundMarkers > 0) {
              map.fitBounds(bounds);
	    } else {
              map.fitBounds(circle.getBounds());
            }
            // makeSidebar();
            // google.maps.event.addListenerOnce(map, 'bounds_changed', makeSidebar);

          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
 
var infowindow = new google.maps.InfoWindow(
  { 
    size: new google.maps.Size(150,50)
  });
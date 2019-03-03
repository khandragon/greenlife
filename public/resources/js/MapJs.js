if (sessionStorage.getItem("lat") == null)
    var latLng = { lat: 45.5026491, lng: -73.5641203 };
else
    latLng = {lat: parseFloat(sessionStorage.getItem("lat")), lng: parseFloat(sessionStorage.getItem("lng"))};

// Initialize and add the map
function initMap() {
  // The location of Uluru
  var minZoom = 5;
  // The map, centered at Uluru
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 5,
    center: latLng
  });
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({ position: latLng, map: map });

  //event lister for mouse click
  google.maps.event.addListener(map, "click", function(event) {
    // get lat/lon of click
    var clickLat = event.latLng.lat();
    var clickLon = event.latLng.lng();

    sessionStorage.setItem("lat", clickLat);
    sessionStorage.setItem("lng", clickLon);

    document.getElementById("latSubmit").value = clickLat;
    document.getElementById("longSubmit").value = clickLon;
    
    latLng = new google.maps.LatLng(clickLat, clickLon);
    marker.setPosition(latLng);
  });


  // Limit the zoom level
  google.maps.event.addListener(map, "zoom_changed", function() {
    if (map.getZoom() < minZoom) map.setZoom(minZoom);
  });
}


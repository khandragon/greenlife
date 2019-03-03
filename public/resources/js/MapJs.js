if (sessionStorage.getItem("lat") == null)
    var latLng = { lat: 45.5026491, lng: -73.5641203 };
else
    latLng = {lat: parseFloat(sessionStorage.getItem("lat")), lng: parseFloat(sessionStorage.getItem("lng"))};

// Initialize and add the map
function initMap() {
  // The location of Uluru
  var minZoom = 5;
  // The map, centered at Uluru
  console.log(latLng);
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

    // show in input box
    console.log("lat", clickLat);
    console.log("lon", clickLon);

    document.getElementById("latSubmit").value = clickLat;
    document.getElementById("longSubmit").value = clickLon;
    
    latLng = new google.maps.LatLng(clickLat, clickLon);
    marker.setPosition(latLng);
  });

  // Bounds for North America
  var strictBounds = new google.maps.LatLngBounds(
    new google.maps.LatLng(48.7, -127.5),
    new google.maps.LatLng(84.85, -50.9)
  );

  // Limit the zoom level
  google.maps.event.addListener(map, "zoom_changed", function() {
    if (map.getZoom() < minZoom) map.setZoom(minZoom);
  });

  // Listen for the dragend event
  google.maps.event.addListener(map, "dragend", function() {
    if (strictBounds.contains(map.getCenter())) return;

    // We're out of bounds - Move the map back within the bounds
    //console.log(strictBounds);
    var c = map.getCenter(),
      x = c.lng(),
      y = c.lat(),
      maxX = strictBounds.getNorthEast().lng(),
      maxY = strictBounds.getNorthEast().lat(),
      minX = strictBounds.getSouthWest().lng(),
      minY = strictBounds.getSouthWest().lat();

    sessionStorage.setItem("lat", y);
    sessionStorage.setItem("lng", x);
    if (x < minX) x = minX;
    if (x > maxX) x = maxX;
    if (y < minY) y = minY;
    if (y > maxY) y = maxY;

    map.setCenter(new google.maps.LatLng(y, x));
  });
}


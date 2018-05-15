var maker;
var map;

function initMap() {

    var location = new google.maps.LatLng(0.0,0.0);
 
    map = new google.maps.Map($("#map")[0], {
        center: location,
	zoom: 4
    });

    marker = new google.maps.Marker({
	position: location,
	map: map,
	title: 'Location'
    });
    

}

function locChanged() {

    var lat = $("#ImgLatitude")[0].value;
    var lng = $("#ImgLongitude")[0].value;
    
    var location = new google.maps.LatLng(lat,lng);
    
    map.setCenter(location);
    marker.setPosition(location);
    
}

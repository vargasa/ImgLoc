
function setMarkers(post, map){
    
    for ( var i = 0; i < post.images.length; i++) {
	
	var lat = post.images[i].latitude;
	var lng = post.images[i].longitude
	
	var location = new google.maps.LatLng(lat,lng);
	
	var marker = new google.maps.Marker({
	    position: location,
	    map: map
	});
    }
    
    marker.setPosition(location);

}

function addPost (id){

    fetch('/api/post/'+id, {
	'content-type' : 'application/json',
	'method' : 'GET',
    })
        .then(function(response) { return response.json(); })
	.then(function (json) {
	    
	    post = json.data ;

	    var divPost = document.createElement("div");
	    divPost.setAttribute("class", "divPost");
	    var hTitle = document.createElement("h1");
	    hTitle.setAttribute("class","hTitle");
	    var divMap = document.createElement("div");
	    divMap.setAttribute("id","mapPost"+id)
	    divMap.setAttribute("class","mapPost");
	    var pDescription = document.createElement("p");
	    var img = document.createElement("img");
	    var hr = document.createElement("hr");
	    divPost.appendChild(hTitle);
	    divPost.appendChild(divMap);
	    divPost.appendChild(img);
	    divPost.appendChild(pDescription);
	    divPost.appendChild(hr);
	    $("#mainContent")[0].appendChild(divPost);
	    
	    hTitle.innerHTML = post.title;
	    pDescription.innerHTML = post.description;

	    
	    var location = new google.maps.LatLng(0.0,0.0);

	    divMap = $("#mapPost"+id)[0];
	    
	    var map = new google.maps.Map(divMap , {
		center: location,
		zoom: 1
	    });
	    
	    map.setOptions({
		'fullscreenControl' : false,
		'streetViewControl' : false,
		'mapTypeControl' : false
	    });
	    
	    map.setCenter(location);
	    
	    setMarkers(post, map);
	    
	    
	});
    
}

<!DOCTYPE html>
<html>
  <head>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/ImgLoc.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7iS1q3EjnUzVQ_VC_wm8fCYATP1r3ZAg&callback=initMap"
	    async defer></script>
    <title> ImgLoc </title>
  </head>
  
  <body onLoad="locChanged()">
    
    <h1>ImgLoc </h1>
    
    <hr/>

    @yield('main_content')
    
    <hr/>
  </body>
</html>
  

<!DOCTYPE html>
<html>
  <head>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7iS1q3EjnUzVQ_VC_wm8fCYATP1r3ZAg"
	    ></script>
    <script src="http://pagination.js.org/dist/2.1.2/pagination.min.js"></script>
    <title> ImgLoc </title>
  </head>
  <body>

    <div id="mainContent"">
      <div class="container">
	<h1>ImgLoc</h1>
      </div>
      <hr/>

      @yield('main_content')

      <hr/>
    </div>

  </body>
  <script src="{{ asset('js/ImgLoc.js') }}"></script>
</html>

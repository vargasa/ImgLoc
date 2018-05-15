@extends('master')

@section('main_content')

  <h1>{{ $title  }}</h1>
  <img src="{{ $imgPath }}"> </img>
  
  <hr/>
  <p>{{ $description }}</p>
  
  <hr/>
    <div id="map"></div>
  
  <form>
    <input id="ImgLatitude" type="hidden" value="{{ $imgLatitude }}" />
    <input id="ImgLongitude" type="hidden" value="{{ $imgLongitude }}" />
  </form>
  
@stop

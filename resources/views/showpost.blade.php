@extends('master')

@section('main_content')

  <h1>{{ $post->title  }}</h1>
  <pre>{{$post->images }}</pre>
  <img src="{{ $post->images[0]->filename }}"> </img>
  <hr/>
  <div id="map"></div>
  <p>{{ $post->description }}</p>
  
  <hr/>

  <form>
    @foreach ($post->images as $image)
      <input class="ImgLatitude" type="hidden" value="{{ $image->latitude }}" onchange="locChanged()"/>
      <input class="ImgLongitude" type="hidden" value="{{ $image->longitude }}" onchange="locChanged()"/>
    @endforeach
  </form>
  
@stop

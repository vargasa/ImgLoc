@extends('master')

@section('main_content')

  {{ Form::open(['action' => 'PostController@Save']) }}

  {{ Form::label('PostTitle', 'Title') }}
  {{ Form::text('PostTitle') }} <br/>

  {{ Form::label('PostDescription', 'Description') }}
  {{ Form::text('Description') }} <br/>

  {{ Form::label('Img', 'Select File') }}
  {{ Form::file('image') }} <br/>

  {{ Form::label('Location', 'Location') }} 
  {{ Form::label('ImgLatitude', 'Latitude') }}
  {{ Form::number('ImgLatitude', '38.937398') }} 
  {{ Form::label('ImgLongitude', 'Longitude') }}
  {{ Form::number('ImgLongitude', '-77.0008392') }} <br/>

  {{ Form::submit('Submit') }}
  {{ Form::close() }}

@stop
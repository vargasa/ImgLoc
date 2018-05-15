@extends('master')

@section('main_content')

  {{ Form::open(['action' => 'PostController@create']) }}

  {{ Form::label('PostTitle', 'Title') }}
  {{ Form::text('PostTitle') }} <br/>

  {{ Form::label('PostDescription', 'Description') }}
  {{ Form::text('PostDescription') }} <br/>

  {{ Form::label('Img', 'Select File') }}
  {{ Form::file('image') }} <br/>
  
  {{ Form::label('Location', 'Location') }} 
  {{ Form::label('ImgLatitudeLabel', 'Latitude') }}
  {{ Form::number('ImgLatitude', '38.937398') }} 
  {{ Form::label('ImgLongitudeLabel', 'Longitude') }}
  {{ Form::number('ImgLongitude', '-77.0008392') }} <br/>

  {{ Form::submit('Submit') }}
  {{ Form::close() }}

@stop

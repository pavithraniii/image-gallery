<html>
    <h1>Images</h1>

    {!! Form::open(['action' => 'imagegalleryController@store','method'=>'POST']) !!}

    <div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title', '',['class'=> 'form-control', 'placeholder'=> 'title'])}}
    &nbsp;
    {{Form::label('image', 'Image')}}
    {{ Form::file('image')}}
    </div>

    {{Form::submit('Upload', ['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}




    @if(count($imagegallery)>0)
      @foreach($imagegallery as $image)
        {{$image->title}}
        {{$image->image}}
      @endforeach
    @endif


</html>
@extends('app')

@section('content')

<form method="POST" class="form-inline" action="{!! url('slider-content/create') !!}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    {!! select_box('slider_id', 'Slider', $sliders, old('slider_id')) !!}
    <input type="file" name="img" />
    {!! input_text('caption', 'Slide Caption', old('caption')) !!}

    <input type="submit" value="Create" />
</form>

@stop
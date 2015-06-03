@extends('app')

@section('content')

<div class="col-md-6 col-md-offset-3">
<form method="POST" class="form-horizontal" action="{!! url('slider-content/create') !!}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    {!! select_box('slider_id', 'Slider', $sliders, old('slider_id')) !!}
    {!! input_text('caption', 'Slide Caption', old('caption')) !!}
    {!! input_text('img', 'Slide Image', old('img'), 'file') !!}

    <input type="submit" class="btn btn-default" value="Create" />
</form>
</div>

@stop
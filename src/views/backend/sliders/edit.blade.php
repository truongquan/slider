@extends('app')

@section('content')

<div class="col-md-6 col-md-offset-3">
<form method="POST" class="form-horizontal" action="{!! url('slider-content/edit/'.$slide->id) !!}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    {!! select_box('slider_id', 'Slider', $sliders, $slide->slider_id) !!}
    {!! input_text('caption', 'Slide Caption', $slide->caption) !!}
    
    <div class="form-group">
        <label>Uploaded Image</label>
        <img src="{!! url(config('slider.thumb_path').'/'.$slide->image_encrypt) !!}">
    </div>
    
    {!! input_text('img', 'Slide Image', old('img'), 'file') !!}

    <input type="submit" class="btn btn-default" value="Save" />
</form>
</div>

@stop
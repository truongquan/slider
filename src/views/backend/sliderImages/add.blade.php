@extends(config('slider.layout_backend'))

@section(config('slider.section_backend'))

<div class="col-md-6 col-md-offset-3">
<form method="POST" class="form-horizontal" action="{!! url('slider-content/create') !!}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <?php $slider_id = isset($_GET['slider_id']) ? $_GET['slider_id'] : old('slider_id') ?>

    {!! select_box('slider_id', 'Slider', $sliders, $slider_id) !!}
    {!! input_text('caption', 'Slide Caption', old('caption')) !!}
    {!! input_text('img', 'Slide Image', old('img'), 'file') !!}

    <input type="submit" class="btn btn-default" value="Create" />
</form>
</div>

@stop
@extends(config('slider.layout_backend'))

@section(config('slider.section_backend'))

<div class="col-md-6 col-md-offset-3">
<form method="GET" class="form-horizontal" action="{!! url('slider/create') !!}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    {!! select_box('sliderType', 'Select Slider Type', config('slider.type_label')) !!}
    <a href="{!! url('slider') !!}" class="btn btn-success">Back</a>
    <input type="submit" class="btn btn-success" value="Continue" />
</form>
</div>

@stop
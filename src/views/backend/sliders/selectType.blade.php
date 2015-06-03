@extends('app')

@section('content')

<div class="col-md-6 col-md-offset-3">
<form method="POST" class="form-horizontal" action="{!! url('slider/create') !!}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    {!! select_box('sliderType', 'Select Slider Type', array_keys(config('slider.slider_type'))) !!}

    <input type="submit" class="btn btn-default" value="Continue" />
</form>
</div>

@stop
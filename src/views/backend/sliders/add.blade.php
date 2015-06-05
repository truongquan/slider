@extends(config('slider.layout_backend'))

@section(config('slider.section_backend'))

<div class="col-md-6 col-md-offset-3">
<h1>Default Configuration</h1>
<form method="POST" class="form-horizontal" action="{!! url('slider/create') !!}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    {!! showAllErrors($errors) !!}
    
    {!! input_text('name', 'Slider Name', old('name')) !!}
    {!! input_text('slug', 'Slider Slug Name', old('slug')) !!}
    {!! config_type($sliderType) !!}
    <input type="hidden" name="sliderType" value="{{$sliderType}}" />

    <input type="submit" class="btn btn-default" value="Create" />
</form>
</div>

@stop
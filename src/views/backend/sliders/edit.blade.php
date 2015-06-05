@extends(config('slider.layout_backend'))

@section(config('slider.section_backend'))

<div class="col-md-6 col-md-offset-3">
<h1>Default Configuration</h1>
<form method="POST" class="form-horizontal" action="{!! url('slider/'.$slider->id.'/edit') !!}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    {!! showAllErrors($errors) !!}
    
    {!! input_text('name', 'Slider Name', $slider->name) !!}
    {!! input_text('slug', 'Slider Slug Name', $slider->slug) !!}
    {!! config_type($slider->sliderType, $slider) !!}
    <input type="hidden" name="sliderType" value="{{$slider->sliderType}}" />

    <input type="submit" class="btn btn-default" value="Save" />
</form>
</div>

@stop
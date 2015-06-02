@extends('app')

@section('content')

<form method="POST" action="{!! url('slider-content/create') !!}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    {!! select_box('slider_id', 'Slider') !!}
</form>

@stop
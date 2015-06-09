@extends(config('slider.layout_backend'))

@section(config('slider.section_backend'))

<div class="col-md-6 col-md-offset-3">
<h1>Image slider</h1>

<table class="table table-striped">

<thead>
    <tr>
        <th>ID</th>
        <th>Images</th>
        <th colspan="2">Operations</th>
    </tr>
</thead>

<tbody>
@foreach ($result as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td><img src="{!! url(config('slider.thumb_path').'/'.$row->image_encrypt) !!}"></td>
        <td><a href="{!! url('slider-content/edit/'.$row->id) !!}">Edit</a></td>
        <td><a href="{!! url('slider-content/'.$row->id.'/delete') !!}">Remove</a></td>
    </tr>
@endforeach 
</tbody>

</table>

<h2>
@if ($slider_id)
<a href="{!! url('slider-content/create?slider_id='.$slider_id) !!}" class="btn btn-success">
@else
<a href="{!! url('slider-content/create') !!}" class="btn btn-success">
@endif
    Create New Image Slider
</a></h2>

</div>

@stop
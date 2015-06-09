@extends(config('slider.layout_backend'))

@section(config('slider.section_backend'))

<div class="col-md-6 col-md-offset-3">
<h1>Slider</h1>

<table class="table table-striped">

<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Slug</th>
        <th colspan="3">Operations</th>
    </tr>
</thead>

<tbody>
@foreach ($result as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td><a href="{{url('slider/'.$row->id.'/content')}}">{{$row->name}}</a></td>
        <td><a href="{{url('slider/'.$row->id.'/content')}}">{{$row->slug}}</a></td>
        <td><a href="{!! url('slider/'.$row->id.'/edit/') !!}">Edit</a></td>
        <td><a href="{!! url('slider-content/create?slider_id='.$row->id) !!}">Add Item</a></td>
        <td><a href="{!! url('slider/'.$row->id.'/delete/') !!}">Remove</a></td>
    </tr>
@endforeach 
</tbody>

</table>
<h2><a href="{!! url('slider/create') !!}" class="btn btn-success" >Create New Slider</a></h2>
</div>

@stop
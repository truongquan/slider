@extends('app')

@section('content')
<div class="col-md-6 col-md-offset-3">
<h1>Image slider</h1>

<h2><a href="{!! url('slider-content/create') !!}">Create New Image Slider</a></h2>

<table class="table table-striped">

<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th colspan="2">Operations</th>
    </tr>
</thead>

<tbody>
@foreach ($result as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->slug}}</td>
        <td><a href="{!! url('slider/edit/'.$row->id) !!}">Edit</a></td>
        <td><a href="{!! url('slider/delete/'.$row->id) !!}">Remove</a></td>
    </tr>
@endforeach 
</tbody>

</table>
</div>

@stop
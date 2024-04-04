@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Teacher Edit Page</div>
    <div class="card-body">
        <form action="{{ url('/teachers/'. $teacher->id) }}" method="POST">
            {{ csrf_field() }}
            @method('patch')
            <input type="hidden" name="id" id="id" value="{{$teacher->id}}" />
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{$teacher->name}}" class="form-control">
            <label for="address">address</label>
            <input type="text" name="address" id="address" value="{{$teacher->address}}" class="form-control">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" id="mobile" value="{{$teacher->mobile}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success">
        </form>
    </div>
</div>
@stop
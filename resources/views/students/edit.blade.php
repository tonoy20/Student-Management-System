@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Student Edit Page</div>
    <div class="card-body">
        <form action="{{ url('/students/'. $student->id) }}" method="POST">
            {{ csrf_field() }}
            @method('patch')
            <input type="hidden" name="id" id="id" value="{{$student->id}}" />
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{$student->name}}" class="form-control">
            <label for="address">address</label>
            <input type="text" name="address" id="address" value="{{$student->address}}" class="form-control">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" id="mobile" value="{{$student->mobile}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success">
        </form>
    </div>
</div>
@stop
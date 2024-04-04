@extends('layout')
@section('content')
<div class="pt-3"></div>
<div class="card">
    <div class="card-header">
        <h4 class="text-center">Student Page</h4>
    </div>
    <div class="card-body">
        <form action="{{url('students')}}" method="POST">
            {!! csrf_field() !!}
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
            <label for="address">address</label>
            <input type="text" name="address" id="address" class="form-control">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" id="mobile" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>
@stop
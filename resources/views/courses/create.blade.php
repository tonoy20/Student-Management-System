@extends('layout')
@section('content')
<div class="pt-3"></div>
<div class="card">
    <div class="card-header">
        <h4 class="text-center">Course Page</h4>
    </div>
    <div class="card-body">
        <form action="{{url('courses')}}" method="POST">
            {!! csrf_field() !!}
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
            <label for="syllabus">Syllabus</label>
            <input type="text" name="syllabus" id="syllabus" class="form-control">
            <label for="duration">Duration</label>
            <input type="text" name="duration" id="duration" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>
@stop
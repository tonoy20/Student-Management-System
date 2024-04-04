@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Course Edit Page</div>
    <div class="card-body">
        <form action="{{ url('/courses/'. $course->id) }}" method="POST">
            {{ csrf_field() }}
            @method('patch')
            <input type="hidden" name="id" id="id" value="{{$course->id}}" />
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{$course->name}}" class="form-control">
            <label for="syllabus">Syllabus</label>
            <input type="text" name="syllabus" id="syllabus" value="{{$course->syllabus}}" class="form-control">
            <label for="duration">Duration</label>
            <input type="text" name="duration" id="duration" value="{{$course->duration}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success">
        </form>
    </div>
</div>
@stop
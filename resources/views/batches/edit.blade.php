@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Batch Edit Page</div>
    <div class="card-body">
        <form action="{{ url('/batches/'. $batch->id) }}" method="POST">
            {{ csrf_field() }}
            @method('patch')
            <input type="hidden" name="id" id="id" value="{{$batch->id}}" />
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{$batch->name}}" class="form-control">

            <!-- <label for="course_id">Course</label>
            <input type="text" name="course_id" id="course_id" value="{{$batch->course_id}}" class="form-control"> -->

            <label for="course">Course</label>
            <!-- <input type="text" name="course_id" id="course_id" class="form-control"> -->
            <select name="course_id" id="course_id" class="form-control">
                <option value="{{$batch->course->id}}" selected disabled hidden>{{$batch->course->name}}</option>
                @foreach ($course as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>

            <label for="start_date">Start_date</label>
            <input type="text" name="start_date" id="start_date" value="{{$batch->start_date}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success">
        </form>
    </div>
</div>
@stop
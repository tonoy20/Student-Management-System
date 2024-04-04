@extends('layout')
@section('content')
<div class="pt-3"></div>
<div class="card">
    <div class="card-header">
        <h4 class="text-center">Batches</h4>
    </div>
    <div class="card-body">
        <form action="{{url('batches')}}" method="POST">
            {!! csrf_field() !!}
            <label for="name">Batch Name</label>
            <input type="text" name="name" id="name" class="form-control">

            <label for="course">Course</label>
            <!-- <input type="text" name="course_id" id="course_id" class="form-control"> -->
            <select name="course_id" id="course_id" class="form-control">
                <option value="" selected disabled hidden>Choose here</option>
                @foreach ($courses as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>

            <label for="start_date">Start_date</label>
            <input type="text" name="start_date" id="start_date" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>
@stop
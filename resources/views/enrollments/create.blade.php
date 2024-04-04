@extends('layout')
@section('content')
<div class="pt-3"></div>
<div class="card">
    <div class="card-header">
        <h4 class="text-center">Course Page</h4>
    </div>
    <div class="card-body">
        <form action="{{url('enrollments')}}" method="POST">
            {!! csrf_field() !!}
            <label for="enroll_no">Enroll No</label>
            <input type="text" name="enroll_no" id="enroll_no" class="form-control">

            <label for="batch_id">Batch</label>
            <!-- <input type="text" name="batch_id" id="batch_id" class="form-control"> -->

            <select name="batch_id" id="batch_id" class="form-control">
                <option value="" selected disabled hidden>Choose here</option>
                @foreach ($batches as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>

            <label for="student_id">Student</label>
            <!-- <input type="text" name="student_id" id="student_id" class="form-control"> -->
            <select name="student_id" id="student_id" class="form-control">
                <option value="" selected disabled hidden>Choose here</option>
                @foreach ($students as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>


            <label for="join_date">Join Date</label>
            <input type="text" name="join_date" id="join_date" class="form-control">

            <label for="fee">Fee</label>
            <input type="text" name="fee" id="fee" class="form-control"><br>

            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>
@stop
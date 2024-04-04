@extends('layout')
@section('content')
<div class="pt-3"></div>
<div class="card">
    <div class="card-header">
        <h3 class="text-center">Enrollment Page</h3>
    </div>
    <div class="card-body">
        <h5 class="card-title lead"><strong>Enrollment No: {{$enrollment->enroll_no}}</strong></h5>
        <p class="card-text lead">Batch : {{$enrollment->batch->name}}</p>
        <p class="card-text lead">Student: {{$enrollment->student->name}}</p>
        <p class="card-text lead">Join Date: {{$enrollment->join_date}}</p>
        <p class="card-text lead">Fee: {{$enrollment->fee}}</p>
    </div>
</div>
@endsection
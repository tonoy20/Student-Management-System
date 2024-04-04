@extends('layout')
@section('content')
<div class="pt-3"></div>
<div class="card">
    <div class="card-header">
        <h3 class="text-center">Batch Page</h3>
    </div>
    <div class="card-body">
        <h5 class="card-title lead"><strong>Name: {{$batch->name}}</strong></h5>
        <p class="card-text lead">Syllabus: {{$batch->course->name}}</p>
        <p class="card-text lead">Duration: {{$batch->start_date}}</p>
    </div>
</div>
@endsection
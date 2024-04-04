@extends('layout')
@section('content')
<div class="pt-3"></div>
<div class="card">
    <div class="card-header">
        <h3 class="text-center">Course Page</h3>
    </div>
    <div class="card-body">
        <h5 class="card-title lead"><strong>Name: {{$course->name}}</strong></h5>
        <p class="card-text lead">Syllabus: {{$course->syllabus}}</p>
        <p class="card-text lead">Duration: {{$course->duration()}}</p>
    </div>
</div>
@endsection
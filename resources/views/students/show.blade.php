@extends('layout')
@section('content')
<div class="pt-3"></div>
<div class="card">
    <div class="card-header">
        <h3 class="text-center">Student Page</h3>
    </div>
    <div class="card-body">
        <h5 class="card-title lead"><strong>Name: {{$student->name}}</strong></h5>
        <p class="card-text lead">Address: {{$student->address}}</p>
        <p class="card-text lead">Mobile: {{$student->mobile}}</p>
    </div>
</div>
@endsection
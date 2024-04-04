@extends('layout')
@section('content')
<div class="pt-3"></div>
<div class="card">
    <div class="card-header">
        <h3 class="text-center">Payment Page</h3>
    </div>
    <div class="card-body">
        <h5 class="card-title lead"><strong>Enrollment No: {{$payment->enrollment->enroll_no}}</strong></h5>
        <p class="card-text lead">Paid Date: {{$payment->paid_date}}</p>
        <p class="card-text lead">Amount: {{$payment->anount}}</p>
    </div>
</div>
@endsection
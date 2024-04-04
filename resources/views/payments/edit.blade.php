@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Payment Edit Page</div>
    <div class="card-body">
        <form action="{{ url('/payments/'. $payment->id) }}" method="POST">
            {{ csrf_field() }}
            @method('patch')
            <input type="hidden" name="id" id="id" value="{{$payment->id}}" />
            <label for="name">Enrollment No</label>
            <select name="enrollment_id" id="enrollment_id" class="form-control">
                <option value="{{$payment->enrollment_id}}" selected disabled hidden>{{$payment->enrollment->enroll_no}}</option>
                @foreach ($enrollments as $id => $enroll_no)
                <option value="{{ $id }}">{{ $enroll_no }}</option>
                @endforeach
            </select>

            <label for="paid_date">Paid Date</label>
            <input type="text" name="paid_date" id="paid_date" value="{{$payment->paid_date}}" class="form-control">

            <label for="amount">Amount</label>
            <input type="text" name="amount" id="amount" value="{{$payment->amount}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success">
        </form>
    </div>
</div>
@stop
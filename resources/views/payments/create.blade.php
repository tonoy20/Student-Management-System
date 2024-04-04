@extends('layout')
@section('content')
<div class="pt-3"></div>
<div class="card">
    <div class="card-header">
        <h4 class="text-center">PAYMENT</h4>
    </div>
    <div class="card-body">
        <form action="{{url('payments')}}" method="POST">
            {!! csrf_field() !!}
            <label for="Enrollment_No">Enrollment No</label>
            <select name="enrollment_id" id="enrollment_id" class="form-control">
                <option value="" selected disabled hidden>Choose here</option>
                @foreach ($enrollments as $id => $enroll_no)
                <option value="{{ $id }}">{{ $enroll_no }}</option>
                @endforeach
            </select>

            <label for="paid_date">Paid Date</label>
            <input type="text" name="paid_date" id="paid_date" class="form-control">



            <label for="amount">Amount</label>
            <input type="text" name="amount" id="amount" class="form-control"><br>

            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>
@stop
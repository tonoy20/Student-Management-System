@extends('layout')
@section('content')
<div class="pt-3"></div>
<div class="card">
    <div class="card-header">
        <p class="text-center h4">Payment Application</p>
    </div>
    <div class="card-body">
        <a href="{{url('/payments/create')}}" class="btn btn-success" title="Add new Payment">
            <i class="fa fa-plus" aria-hidden="true"></i>Add New
        </a>
        <br><br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Enrollment No</th>
                        <th>Paid Date</th>
                        <th>Amount</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->enrollment->enroll_no}}</td>
                        <td>{{$item->paid_date}}</td>
                        <td>{{$item->amount}}</td>
                        <td>
                            <a href="{{url('/payments/'. $item->id)}}"><button class="btn btn-info">View</button></a>
                            <a href="{{url('/payments/'. $item->id . '/edit')}}"><button class="btn btn-primary">Edit</button></a>
                            <form method="POST" action="{{url('/payments'. '/' .$item->id)}}" onclick="return confirm('Confirm delete?')" style="display:inline">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="{{ url('/report/report1/'. $item->id) }}" title="Download Payment"><button class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i>Print</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
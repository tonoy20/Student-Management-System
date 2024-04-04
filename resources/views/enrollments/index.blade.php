@extends('layout')
@section('content')
<div class="pt-3"></div>
<div class="card">
    <div class="card-header">
        <p class="text-center h4">Enrollment Application</p>
    </div>
    <div class="card-body">
        <a href="{{url('/enrollments/create')}}" class="btn btn-success" title="Add new Enrollment">
            <i class="fa fa-plus" aria-hidden="true"></i>Add New
        </a>
        <br><br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Enroll No</th>
                        <th>Batch</th>
                        <th>Student</th>
                        <th>Join Date</th>
                        <th>Fee</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($enrollments as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->enroll_no}}</td>
                        <td>{{$item->batch->name}}</td>
                        <td>{{$item->student->name}}</td>
                        <td>{{$item->join_date}}</td>
                        <td>{{$item->fee}}</td>
                        <td>
                            <a href="{{url('/enrollments/'. $item->id)}}"><button class="btn btn-info">View</button></a>
                            <a href="{{url('/enrollments/'. $item->id . '/edit')}}"><button class="btn btn-primary">Edit</button></a>
                            <form method="POST" action="{{url('/enrollments'. '/' .$item->id)}}" onclick="return confirm('Confirm delete?')" style="display:inline">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
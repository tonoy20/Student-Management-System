@extends('layout')
@section('content')
<div class="pt-3"></div>
<div class="card">
    <div class="card-header">
        <p class="text-center h4">Batch Application</p>
    </div>
    <div class="card-body">
        <a href="{{url('/batches/create')}}" class="btn btn-success" title="Add new Batch">
            <i class="fa fa-plus" aria-hidden="true"></i>Add New
        </a>
        <br><br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Start Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($batches as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->course->name}}</td>
                        <td>{{$item->start_date}}</td>
                        <td>
                            <a href="{{url('/batches/'. $item->id)}}"><button class="btn btn-info">View</button></a>
                            <a href="{{url('/batches/'. $item->id . '/edit')}}"><button class="btn btn-primary">Edit</button></a>
                            <form method="POST" action="{{url('/batches'. '/' .$item->id)}}" onclick="return confirm('Confirm delete?')" style="display:inline">
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
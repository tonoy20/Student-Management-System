@extends('layout')
@section('content')
<div class="pt-3"></div>
<div class="card">
    <div class="card-header">
        <p class="text-center h4">Teacher Application</p>
    </div>
    <div class="card-body">
        <a href="{{url('/teachers/create')}}" class="btn btn-success" title="Add new Teacher">
            <i class="fa fa-plus" aria-hidden="true"></i>Add New
        </a>
        <br><br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teachers as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->mobile}}</td>
                        <td>
                            <a href="{{url('/teachers/'. $item->id)}}"><button class="btn btn-info">View</button></a>
                            <a href="{{url('/teachers/'. $item->id . '/edit')}}"><button class="btn btn-primary">Edit</button></a>
                            <form method="POST" action="{{url('/teachers'. '/' .$item->id)}}" onclick="return confirm('Confirm delete?')" style="display:inline">
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
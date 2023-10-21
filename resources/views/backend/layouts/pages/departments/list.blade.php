@extends('backend.master')

@section('content')
<section class="department">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header text-center mb-3"><strong>Department Lists</strong></h1>
                <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($departments as $key=>$department)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$department->name}}</td>
                            <td>{{$department->location}}</td>
                            <td>{{$department->status ?? ''}}</td>
                            <td>
                                <a href="{{route('department.view',$department->id)}}" class="btn btn-primary">View</a>
                                <a href="{{route('department.edit',$department->id)}}" class="btn btn-info">Edit</a>
                                <a href="{{route('department.destroy',$department->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
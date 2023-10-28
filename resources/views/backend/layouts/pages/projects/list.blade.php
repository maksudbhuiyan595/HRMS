@extends('backend.master')

@section('content')
<section class="project">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header text-center "><strong>Project Lists</strong></h1>
                <div class="card-body">
                <table class="table border table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">StartDate</th>
                        <th scope="col">EndDate</th>
                        <th scope="col">Department</th>
                        <th scope="col">Employee</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $key=>$project)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$project->full_name}}</td>
                            <td>{{$project->status ?? ''}}</td>
                            <td>{{$project->start_date}}</td>
                            <td>{{$project->end_date}}</td>
                            <td>{{$project->department->name}}</td>
                            <td>{{$project->employee->name}}</td>
                            <td>{{$project->description}}</td>
                            <td>
                                <a href="{{route('project.view',$project->id)}}" class="btn btn-primary">View</a>
                                <a href="{{route('project.edit',$project->id)}}" class="btn btn-info">Edit</a>
                                <a href="{{route('project.destroy',$project->id)}}" class="btn btn-danger">Delete</a>
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
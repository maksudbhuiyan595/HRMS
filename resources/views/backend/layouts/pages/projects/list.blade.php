@extends('backend.master')

@section('content')
<section class="project">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <a class="btn btn-primary" href="{{route('project.create')}}">+ Add Project</a>
                </div>
                <div class="col-md-8">
                    <h1 class=""><strong>Projects List</strong></h1>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                <table class="table border table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Department</th>
                        <th scope="col">StartDate</th>
                        <th scope="col">EndDate</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $key=>$project)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$project->name}}</td>
                            <td class="text-success">{{$project->status}}</td>
                            <td>{{$project->department->name}}</td>
                            <td>{{$project->start_date}}</td>
                            <td>{{$project->end_date}}</td>
                            <td>
                                @php
                                    echo $project->description;
                                @endphp
                            </td>
                            <td>
                                <a href="{{route('assign.employee.project',$project->id)}}" class="btn btn-secondary">Assign</a>
                                <a href="{{route('project.view',$project->id)}}" class="btn btn-info">View</a>
                                <a href="{{route('project.edit',$project->id)}}" class="btn btn-warning">Edit</a>
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



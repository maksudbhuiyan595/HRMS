@extends('backend.master')

@section('content')
<section class="employee">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header "><strong>Designation Lists</strong></h1>
                <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($empDesignations as $key=>$empDesignation)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$empDesignation->name}}</td>
                            <td>
                                <a href="{{route('emp.designation.edit', $empDesignation->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('emp.designation.destroy',$empDesignation->id)}}" class="btn btn-danger">Delete</a>
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
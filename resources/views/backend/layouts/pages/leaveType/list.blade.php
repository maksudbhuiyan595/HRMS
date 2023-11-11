@extends('backend.master')

@section('content')
<section class="leavetype">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header text-center mb-3"><strong>LeaveType Lists</strong></h1>
               
                <div class="card-body">
                <table class="table border table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">LeaveType Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($leavetype as $key=>$value)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$value->leavetype name}}</td>
                                <td>{{$value->description}}</td>
                                <td>{{$value->status}}</td>
                                <td>
                                    <a class="btn btn-info " href="">View</a>
                                    <a class="btn btn-primary " href="">Edit</a>
                                    <a class="btn btn-danger " href="">Delete</a>
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
@extends('backend.master')

@section('content')
<section class="attendence">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header text-center mb-3"><strong>Attendence Lists</strong></h1>
               
                <div class="card-body">
                <table class="table border table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Employee Name</th>
                        <th scope="col">Attendence</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attendences as $key=>$value)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$value->date}}</td>
                                <td>{{$value->employee->name}}</td>
                                <td>{{$value->attend}}</td>
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
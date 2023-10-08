@extends('backend.master')

@section('content')
<section class="employee">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header text-center "><strong>Employee Lists</strong></h1>
                <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Status</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($employees as $key=>$employee)
                      <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$employee->emp_name}}</td>
                        <td>{{$employee->emp_email}}</td>
                        <td>{{$employee->emp_phone}}</td>
                        <td>{{$employee->emp_address}}</td>
                        <td>{{$employee->emp_status}}</td>
                        
                        <td>
                            <img style="height: 60px; width: 60px;"
                             src="{{url('uploads/employees/'.$employee->emp_img)}}" alt="image">
                        </td>
                       <td>
                            <a class="btn btn-info text-white" href="{{route('employee.view',$employee->id)}}">View</a>
                            <a class="btn btn-primary text-white" href="{{route('employee.edit',$employee->id)}}">Edit</a>
                            <a class="btn btn-danger text-white" href="{{route('employee.destroy',$employee->id)}}">Delete</a>
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
{{$employees->links()}}
@endsection
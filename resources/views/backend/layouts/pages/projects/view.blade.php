@extends('backend.master')

@section('content')
<section class="category_list">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header text-center mb-3"><strong>Employee Details</strong></div>
                <div class="card-body">
                    <h5><span>Image: </span>
                    <img style="height: 160px; width: 160px;"
                     src="{{url('uploads/employees/'.$employee->emp_img)}}" alt="image"></h5>
                    <h5><span>Name: </span>{{$employee->emp_name}}</h5>
                    <h5><span>Email: </span>{{$employee->emp_email}}</h5>
                    <h5><span>Phone: </span>{{$employee->emp_phone}}</h5>
                    <h5><span>Address: </span>{{$employee->emp_address}}</h5>
                    <!-- <h5><span>Status: </span>{{$employee->emp_status}}</h5> -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('backend.master')

@section('content')
<section class="category_list">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <h1 class="card-header text-center mb-3"><strong>Department Details</strong></h1>
                <div class="card-body">
                    
                    <h5><span>Name: </span>{{$department->dep_name}}</h5>
                    <h5><span>Location: </span>{{$department->dep_location}}</h5>
                    <h5><span>Status: </span>{{$department->dep_status}}</h5>
                    <h5><span>Description: </span>{{$department->dep_description}}</h5>
                  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
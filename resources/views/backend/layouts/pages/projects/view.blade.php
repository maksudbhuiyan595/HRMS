@extends('backend.master')

@section('content')
<section class="category_list">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <h1 class="card-header text-center mb-3"><strong>Project Details</strong></h1>
                <div class="card-body">
                    
                    <h5><span>Name: </span>{{$projects->name}}</h5>
                    <h5><span>Status: </span>{{$projects->status}}</h5>
                    <h5><span>Start Date:</span>{{$projects->start_date}}</h5>
                    <h5><span>End Date:</span>{{$projects->end_date}}</h5>
                    <h5><span>Department:</span>{{$projects->department->name}}</h5>
                    <h5><span>Employee:</span>{{$projects->employee->name}}</h5>
                    <h5><span>Description: </span>{{$projects->description}}</h5>
                  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
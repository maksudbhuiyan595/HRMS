@extends('backend.master')

@section('content')
<section class="project">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header mb-3"><strong>Project Edit </strong></h1>
                    <div class="card-body">
                    
                        <form action="{{route('project.update',$projects->id)}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Project Name:</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Project Name" value="{{$projects->name}}">
  
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Start Date:</label>
                                   <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror" value="{{ $projects->start_date }}">

                                     @error('start_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                           
                            <div class="mb-3">
                                <label for="">EndDate:</label>
                                   <input type="date" name="end_date" class="form-control @error('end_date') is-invalid @enderror" value="{{ $projects->end_date }}">

                                     @error('end_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Department:</label>
                                  <select name="department_id" class="form-control" id="">
                                    <option value="">Select  One</option>
                                    @forelse($departments as $key=> $value)
                                    <option @if($projects->department_id == $value->id)@endif selected value="{{$value->id}}">{{ $value->name }}</option>
                                    @endforeach
                                  </select>

                                     @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Employee:</label>
                                 <select name="employee_id" class="form-control" id="">
                                   <option value=""> Select One</option>
                                   @forelse($employees as $key=> $value)
                                   <option @if($projects->employee_id == $value->id ) @endif selected value="{{$value->id}}">{{$value->name}}</option>
                                   @endforeach
                                 </select>

                                     @error('employee')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Description:</label>
                                    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description" value="{{$projects->description }}">
  
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                            
                            
                            <button type="submit" class="btn btn-md btn-success">Update Data</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
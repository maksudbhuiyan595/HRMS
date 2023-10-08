@extends('backend.master')

@section('content')
<section class="department">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header mb-3"><strong>Department Edit </strong></h1>
                    <div class="card-body">
                    
                        <form action="{{route('department.update',$department->id)}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Department Name:</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="department name" value="{{$department->dep_name}}">
  
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                           
                            <div class="mb-3">
                                <label for="">Location:</label>
                                   <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" placeholder="location" value="{{$department->dep_location}}">

                                     @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Department Descriptions:</label>
                                   <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="text" >
                                   {{$department->dep_description}}
                                   </textarea>
                                  
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
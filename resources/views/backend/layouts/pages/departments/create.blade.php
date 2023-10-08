@extends('backend.master')

@section('content')
<section class="category_create">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header mb-3"><strong> Create Department </strong></h1>
                    <div class="card-body">
                    
                        <form action="{{route('department.store')}}" method="post" >
                            @csrf
                            <div class="mb-3">
                                <label for="">Department Name:</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="employee name" value="{{old('name')}}">
  
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                           
                            <div class="mb-3">
                                <label for="">Department Loaction:</label>
                                   <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" placeholder="employee email" value="{{old('location')}}">

                                     @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Department Descriptions:</label>
                                   <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="text" value="{{old('description')}}">

                                   </textarea>
                                  
                                   @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                           
                            
                            <button type="submit" class="btn btn-md btn-success">Submit Data</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
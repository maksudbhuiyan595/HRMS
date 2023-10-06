@extends('backend.master')

@section('content')
<section class="category_create">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center mb-3"><strong>Employee Edit </strong></div>
                    <div class="card-body">
                    
                        <form action="{{route('employee.update',$employee->id)}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Employee Name:</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="employee name" value="{{$employee->emp_name}}">
  
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                           
                            <div class="mb-3">
                                <label for="">Employee Email:</label>
                                   <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="employee email" value="{{$employee->emp_email}}">

                                     @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Phone Number:</label>
                                   <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="+8801xxx" value="{{$employee->emp_phone}}">
                                  
                                   @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Address:</label>
                                   <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="address" value="{{$employee->emp_address}}">
                                  
                                   @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div>
                            
                         <!--    <div class="mb-3">
                                <label for="">Image </label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                            </div> -->
                            
                            <button type="submit" class="btn btn-md btn-success">Update Data</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
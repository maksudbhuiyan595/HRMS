@extends('backend.master')

@section('content')
<section class="category_create">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header text-center mb-3"><strong> Create Employee </strong></h2>
                <div class="card-body">

                    <form action="{{route('employee.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">First Name:</label>
                                            <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name" value="{{old('first_name')}}">

                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">Last Name:</label>
                                            <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last Name" value="{{old('last_name')}}">

                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="">Employee Designation:</label>
                                    <select name="empDesignation_id" class="form-control @error('empDesignation_id') is-invalid @enderror">
                                        <option value="">Select One</option>
                                        @forelse ($designatins as $id=>$value )
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                        @empty
                                        <option value="" class="bg-danger">no empDesignation --</option>
                                        @endforelse
                                    </select>
                                    @error('empDesignation_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="">Employee Email:</label>
                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="employee email" value="{{old('email')}}">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Date Of Birth:</label>
                                    <input type="date" name="DOB" class="form-control @error('DOB') is-invalid @enderror"  value="{{old('DOB')}}">

                                    @error('DOB')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="">Gender:</label><br>
                                    <input type="radio" name="gender"   value="male"> <span>Male</span>
                                    <input type="radio" name="gender"   value="female"> <span>Female</span>
                                    <input type="radio" name="gender"   value="oteher"> <span>Other</span>
                                </div>

                            </div><!-- col-md-6 -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Departments:</label>
                                    <select name="department_id" class="form-control @error('department_id') is-invalid @enderror">
                                        <option value="">Select One</option>
                                        @forelse ($departments as $id=>$value )
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                        @empty
                                        <option value="" class="bg-danger">no department --</option>
                                        @endforelse
                                    </select>
                                    @error('department_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Phone Number:</label>
                                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="+8801xxx" value="{{old('phone')}}">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Address:</label>
                                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="address" value="{{old('address')}}">

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Join Date:</label>
                                    <input type="date" name="join_date" class="form-control @error('join_date') is-invalid @enderror" value="{{old('join_date')}}">

                                    @error('join_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="">Salary:</label>
                                    <input type="number" name="salary" class="form-control @error('salary') is-invalid @enderror" placeholder="Number" value="{{old('salary')}}">

                                    @error('salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div><!-- col-md-6 -->
                        </div><!-- row -->
                        
                        
                        <div class="mb-3">
                            <label for="">Image </label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                            
                            @error('image')
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

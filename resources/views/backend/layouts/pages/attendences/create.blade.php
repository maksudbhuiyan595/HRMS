@extends('backend.master')

@section('content')
<section class="attendence">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header text-center mb-3"><strong> Create Attendence </strong></h2>
                <div class="card-body">

                    <form action="{{route('attendence.store')}}" method="post" ">
                        @csrf      
                        <div class="mb-3">
                            <label for="">Date</label>
                                <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{old('date')}}">

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Employee Name</label>
                                <select name="employee_id" class="form-control @error('employee_id') is-invalid @enderror" value="{{old('employee_id')}}">
                                    <option value="">Select One</option>
                                    @forelse ($employees as $key=>$value)
                                    <option value="{{$value->id}}">{{$value->name}}</option> 
                                    @empty
                                            <option class="bg-danger"> no employee --</option>
                                    @endforelse
                                </select>
                                @error('employee_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Attendence</label>
                            <select name="attend" class="form-control @error('attend') is-invalid @enderror" value="{{old('attend')}}">
                                <option value="0">Absence</option>
                                <option value="1">Present</option>
                            </select>
                            @error('attend')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                              
                        <button type="submit ritht-pull" class="btn btn-md btn-success">Submit Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@extends('backend.master')

@section('content')
<section class="department">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header mb-3"><strong>Employee Designaton Edit </strong></h1>
                    <div class="card-body">
                    
                        <form action="{{route('emp.designation.update',$empDesignation->id)}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Employee Designation:</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="employee designation" value="{{$empDesignation->name}}">
  
                                    @error('name')
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
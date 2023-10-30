@extends('backend.master')

@section('content')
<section class="assign">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header mb-3"><strong> Assign Employees to a Project </strong></h1>
                <div class="card-body">
                    <form action="" method="">
                        @csrf

                        <div class="mb-3">
                            <label for="">Projects</label>
                            <select name="project_id" class="form-control" id="">
                                <option value="">Select Project</option>
                                @forelse($projects as $key=> $value)
                                <option value="{{$value->id}}">{{ $value->name }}</option>
                                @endforeach
                            </select>

                            @error('department')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Department:</label>
                            <select name="department_id" class="form-control" id="">
                                <option value="">Select Department</option>
                                @forelse($departments as $key=> $value)
                                <option value="{{$value->id}}">{{ $value->name }}</option>
                                @endforeach
                            </select>

                            @error('department')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">Name of department Employees</div>
                                        <div class="card-body">
                                            <div class="form-check">
                                                
                                                @foreach ($employees as $employee)
                                                  
                                                <input name="assignEmployees[]" class="form-check-input" type="checkbox" value="{{$employee->id}}" id="id">
                                                <label class="form-check-label" for="id">
                                                    {{$employee->full_name}}
                                                </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Submit</button>

                    </form>
                </div>





            </div>
        </div>
    </div>
    </div>
</section>
@endsection
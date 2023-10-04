@extends('backend.master')
@section('content')

<h1 class="text-center"><strong>Role Create Form</strong></h1>
<hr>
<form action="{{ route('role.store') }}" method="POST">
    @csrf
    <div class="form-group mb-3">
      <label for="exampleInputName">Name:</label>
      <input type="string" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name">
    </div>
    <div class="forom-group mb-3">
        <label for="">Select Status</label>
        <select name="status" id="" class="form-control">
            <option value="">Choose one</option>
            <option value="active">Active</option>
            <option value="Deactive">DeActive</option>
        </select>
    </div>

    <div class="form-group mb-3">
        <label for="exampleInputName">Descriptions:</label>
        <input type="string" name="description" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Description">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
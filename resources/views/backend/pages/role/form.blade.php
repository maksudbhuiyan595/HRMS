@extends('backend.pages.master')
@section('content')

<form action="{{ route('role.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputName">Name</label>
      <input type="string" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name">
    </div>
    <div>
        <label for="">Select Status</label>
        <select name="status" id="" class="form-control">
            <option value="active">Active</option>
            <option value="inactive">InActive</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputName">Description</label>
        <input type="string" name="description" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Description">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
@extends('backend.master')
@section('content')

<h1 class="text-center"><strong> Create User</strong></h1>
<hr>
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="form-group mb-3">
      <label for="exampleInputName">Name:</label>
      <input type="string" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name">
    </div>
  
    <div class="form-group mb-3">
        <label for="exampleInputName">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputName"  placeholder="Enter Email">
      </div>
      <div class="form-group mb-3">
        <label for="exampleInputName">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputName"  placeholder="Password">
      </div>
      <div class="form-group mb-3">
        <label for="exampleInputName">Role Name</label>
          <select name="role_id" class="form-control">
           <option value="">Select One</option>
            @forelse ($roles as $role )
            
            <option value="">{{$role->role_name}}</option>
              
            @empty
              <option value="" class="bg-danger">no role --</option>
            @endforelse
          </select>
      </div>
      <div class="form-group mb-3">
        <label for="exampleInputName">Role</label>
        <input type="text" name="role" class="form-control" id="exampleInputName"  placeholder="Role">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
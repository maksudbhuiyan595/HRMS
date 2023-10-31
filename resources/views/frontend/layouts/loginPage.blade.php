@extends('frontend.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
               <div class="card mt-5 p-3">

                <div class="card-body ">
                    <h3 class="text-center"><strong>Login Form</strong></h3>
                    <hr>
                    <form action="{{route('customer.dologin')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="login">UserName:</label>
                            <input type="email" name="email" class="form-control" placeholder="write username" id="login">
                        </div>
                        <div class="mb-3">
                            <label for="password">Password:</label>
                            <input type="password" name="password" class="form-control" placeholder="password" id="password">
                        </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Forget Password
                        </button>

                        <button style="float: right;" type="submit" class="btn btn-success px-5">Login</button>
                </form>
                </div>
               </div>
            </div>
        </div>
    </div>

@endsection



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Forget Password</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="{{ route('send.reset.link') }}" method="post">
            @csrf
            <div class="mb-3">
            <label for="">Enter Eamil</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <button type="submit" class="btn btn-primary">Send Reset Link</button>
       </form>
      </div>
    </div>
  </div>
</div>
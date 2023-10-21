@extends('frontend.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
               <div class="card mt-5 p-3">

                <div class="card-body ">
                    <h3 class="text-center"><strong>Login Form</strong></h3>
                    <hr>
                    <form action="{{route('admin.dologin')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="login">UserName:</label>
                            <input type="email" name="email" class="form-control" placeholder="write username" id="login">
                        </div>
                        <div class="mb-3">
                            <label for="password">Password:</label>
                            <input type="password" name="password" class="form-control" placeholder="password" id="password">
                        </div>
                        <button style="float: right;" type="submit" class="btn btn-success px-5">Login</button>
                </form>
                </div>
               </div>
            </div>
        </div>
    </div>

@endsection
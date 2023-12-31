@extends('frontend.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
               <div class="card mt-5 p-3">

                <div class="card-body ">
                    <h3 class="text-center"><strong>Register Form</strong></h3>
                    <hr>
                    <form action="{{route('customer.update.register')}}" method="post" >
                        @csrf
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">First Name:</label>
                                    <input type="text" name="fname" class="form-control" placeholder="write first name" id="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="lname">Last Name:</label>
                                     <input type="text" name="lname" class="form-control" placeholder="write last name" id="lname">
                                </div>
                            </div>

                        </div>
                     
                        
                        <div class="mb-3">
                            <label for="email">UserName:</label>
                            <input type="email" name="email" class="form-control" placeholder="write username" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="password">Password:</label>
                            <input type="password" name="password" class="form-control" placeholder="password" id="password">
                        </div>
                       
                        <button style="float: right;" type="submit" class="btn btn-success px-5">Register</button>
                </form>
                </div>
               </div>
            </div>
        </div>
    </div>

@endsection
@extends('backend.master')

@section('content')
<section class="attendence">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h1 class="card-header text-center mb-3"><strong>Leave Request</strong></h1>
               
                <div class="card-body">
                <table class="table border table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tittle</th>
                        <th scope="col">Employee Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                                <td>
                                    <a class="btn btn-info " href="">View</a>
                                    <a class="btn btn-primary " href="">Edit</a>
                                    <a class="btn btn-danger " href="">Delete</a>
                                </td>
                            </tr>
        
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
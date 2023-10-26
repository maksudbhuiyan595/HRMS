@extends('backend.master')

@section('content')
<section class="employee">
              
    <h1 class="text-center"><strong>Employees List</strong></h1>
        <a class="btn btn-success" href="{{ route('employee.create') }}">+ Add Employee</a>     
        <hr>
             <table class="table employee-table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Department</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Gender</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Address</th>
                        <th scope="col">Join Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
</section>


@endsection

@push('js')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
  $(function () {
      
      var table = $('.employee-table').DataTable({
          processing: true,
          serverSide: false,
          ajax: "{{ route('employee.ajaxEmployee') }}",
          columns: [
              { data: 'id', name: 'id' },
              { data: 'first_name', name: 'first_name' },
              { data: 'last_name', name: 'last_name' },
              { data: 'empDesignation_id', name: 'empDesignation_id' },
              { data: 'department_id', name: 'department_id' },
              { data: 'email', name: 'email' },
              { data: 'phone', name: 'phone' },
              { data: 'gender', name: 'gender' },
              { data: 'DOB', name: 'DOB' },
              { data: 'salary', name: 'salary' },
              { data: 'address', name: 'address' },
              { data: 'join_date', name: 'join_date' },   
              { data: 'status', name: 'status' },
              { data: 'image', name: 'image' },
              {
                  data: 'action', 
                  name: 'action', 
                  orderable: true, 
                  searchable: true
                },
        ]
    });
    
});
</script>

@endpush




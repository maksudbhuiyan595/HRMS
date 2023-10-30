<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
    
       
      @if (checkUserPermission('employee.list'))
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Employees</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            @if (checkUserPermission('employee.create'))
            <a href="{{route('employee.create')}}">
              <i class="bi bi-circle"></i><span>Add Employee</span>
            </a>
            @endif
          </li>
          <li>
            @if (checkUserPermission('employee.list'))
            <a href="{{route('employee.list')}}">
              <i class="bi bi-circle"></i><span>Employees List</span>
            </a>
            @endif
          </li>
        </ul>
      </li>
      @endif
      <!-- End employees Nav -->


      @if (checkUserPermission('emp.designation.list'))
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#empDesignation" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Employee Designations</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="empDesignation" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
          @if (checkUserPermission('emp.designation.create'))
            <a href="{{route('emp.designation.create')}}">
              <i class="bi bi-circle"></i><span>Add Designation</span>
            </a>
            @endif
          </li>
          <li>
          @if (checkUserPermission('emp.designation.list'))
            <a href="{{route('emp.designation.list')}}">
              <i class="bi bi-circle"></i><span>Designations List</span>
            </a>
            @endif
          </li>
        </ul>
      </li>
      @endif
      <!-- End EmpDesignation Nav -->

      @if (checkUserPermission('department.list'))
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#departments" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Departments</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="departments" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            
            @if (checkUserPermission('department.create'))
            <a href="{{route('department.create')}}">
              <i class="bi bi-circle"></i><span>Add Department</span>
            </a>
            @endif
          </li>
          <li>
          @if (checkUserPermission('department.list'))
            <a href="{{route('department.list')}}">
              <i class="bi bi-circle"></i><span>Departments List</span>
            </a>
            @endif
          </li>
        </ul>
      </li>
      @endif
      
      <!-- End departments Nav -->
 

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#projects" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Projects</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="projects" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            
         
            <a href="{{route('project.create')}}">
              <i class="bi bi-circle"></i><span>Add Project</span>
            </a>
         
          </li>
          <li>
         
            <a href="{{route('project.list')}}">
              <i class="bi bi-circle"></i><span>Lists Project</span>
            </a>
      
          </li>
          <li>
    
            <a href="{{route('assign.employee.project')}}">
              <i class="bi bi-circle"></i><span>Add Employees to Project </span>
            </a>
        
          </li>
          <li>
        
            <a href="{{route('employee.list.project')}}">
              <i class="bi bi-circle"></i><span>Employees list to Project</span>
            </a>
        
          </li>
        </ul>
      </li>
     
      <!-- End project Nav -->

      @if (checkUserPermission('attendence.list'))
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#attendences" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Attendences</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="attendences" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
          @if (checkUserPermission('attendence.create'))
            <a href="{{route('attendence.create')}}">
              <i class="bi bi-circle"></i><span>Add Attendence</span>
            </a>
            @endif
          </li>
          <li>
          @if (checkUserPermission('attendence.list'))
            <a href="{{route('attendence.list')}}">
              <i class="bi bi-circle"></i><span>Attendences List</span>
            </a>
            @endif
          </li>
         
        </ul>
      </li>
      @endif
      <!-- End attendance Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#leaves" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Leaves</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="leaves" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
         
            <a href="">
              <i class="bi bi-circle"></i><span>Add </span>
            </a>
            
          </li>
          <li>
        
            <a href="">
              <i class="bi bi-circle"></i><span> List</span>
            </a>
          
          </li>
        </ul>
      </li> 
     
      <!-- End leaves Nav -->
       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#types" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Leave Types</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="types" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
         
            <a href="">
              <i class="bi bi-circle"></i><span>Add </span>
            </a>
            
          </li>
          <li>
        
            <a href="">
              <i class="bi bi-circle"></i><span>list </span>
            </a>
          
          </li>
        </ul>
      </li> 
      
      <!-- End leave types Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#notices" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Notices</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="notices" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
         
            <a href="">
              <i class="bi bi-circle"></i><span>Add </span>
            </a>
            
          </li>
          <li>
        
            <a href="">
              <i class="bi bi-circle"></i><span> List</span>
            </a>
          
          </li>
        </ul>
      </li> 
      
      <!-- End notices Nav -->

     <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#payroll" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Payroll</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="payroll" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
         
            <a href="">
              <i class="bi bi-circle"></i><span>Add </span>
            </a>
            
          </li>
          <li>
        
            <a href="">
              <i class="bi bi-circle"></i><span> List</span>
            </a>
          
          </li>
        </ul>
      </li> 
      <!-- End payroll Nav -->
      

     
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#roles" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Roles</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="roles" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
        
            <a href="{{route('role.create')}}">
              <i class="bi bi-circle"></i><span>Add Role</span>
            </a>
           
          </li>
          <li>
          
            <a href="{{route('role.list')}}">
              <i class="bi bi-circle"></i><span>Roles List</span>
            </a>
        
          </li>
        </ul>
      </li>
      
      <!-- End Roles Nav -->

      @if (checkUserPermission('user.list'))
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#users" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
          @if (checkUserPermission('user.create'))
            <a href="{{route('user.create')}}">
              <i class="bi bi-circle"></i><span>Add User</span>
            </a>
            @endif
          </li>
          <li>
          @if (checkUserPermission('user.list'))
            <a href="{{route('user.list')}}">
              <i class="bi bi-circle"></i><span>Users list</span>
            </a>
            @endif
          </li>
        </ul>
      </li>
      @endif
      <!-- End users Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#settings" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="settings" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
         
            <a href="">
              <i class="bi bi-circle"></i><span>Add </span>
            </a>
            
          </li>
          <li>
        
            <a href="">
              <i class="bi bi-circle"></i><span> List</span>
            </a>
          
          </li>
        </ul>
      </li><!-- End settings Nav -->

    </ul>

  </aside><!-- End Sidebar-->
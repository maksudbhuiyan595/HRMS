<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Employees</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('employee.create')}}">
              <i class="bi bi-circle"></i><span>Add Employee</span>
            </a>
          </li>
          <li>
            <a href="{{route('employee.list')}}">
              <i class="bi bi-circle"></i><span>Employee Lists</span>
            </a>
          </li>
        </ul>
      </li><!-- End employees Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#empDesignation" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Employee Designations</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="empDesignation" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('emp.designation.create')}}">
              <i class="bi bi-circle"></i><span>Add Designation</span>
            </a>
          </li>
          <li>
            <a href="{{route('emp.designation.list')}}">
              <i class="bi bi-circle"></i><span>Designation Lists</span>
            </a>
          </li>
        </ul>
      </li><!-- End EmpDesignation Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#departments" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Departments</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="departments" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('department.create')}}">
              <i class="bi bi-circle"></i><span>Add Department</span>
            </a>
          </li>
          <li>
            <a href="{{route('department.list')}}">
              <i class="bi bi-circle"></i><span>Department Lists</span>
            </a>
          </li>
        </ul>
      </li><!-- End departments Nav -->


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
              <i class="bi bi-circle"></i><span>Role Lists</span>
            </a>
          </li>
        </ul>
      </li><!-- End Roles Nav -->

     

    </ul>

  </aside><!-- End Sidebar-->
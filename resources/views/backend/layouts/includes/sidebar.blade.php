<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="">
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
      </li>
        </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#role" data-bs-toggle="collapse" href="">
          <i class="bi bi-menu-button-wide"></i><span>Roles</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="role" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('role.create') }}">
            <i class="bi bi-circle"></i><span>Add Role</span>
          </a>
        </li>
          <li>
          <a href="{{ route('role.list') }}">
            <i class="bi bi-circle"></i><span>Role Lists</span>
          </a>
        </li>
      </li>
        </ul>
        </li>
    </ul>
      <!-- End components -->
      

      

  </aside>
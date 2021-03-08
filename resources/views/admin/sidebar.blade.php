<div id="sidebar_loader">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin') }}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-calendar-alt"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Administration</div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user-md"></i>
                    <span>Users</span>
                </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('userslist') }}">Users list</a>
            <a class="collapse-item" href="">Roles</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Jobs Collapse Menu -->
  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-building"></i>
          <span>Products</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="">Products List</a>
            <a class="collapse-item" href="">Add new lorem</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFinances" aria-expanded="true" aria-controls="collapseFinances">
          <i class="fas fa-fw fa-money-bill-alt"></i>
          <span>Orders</span>
        </a>
        <div id="collapseFinances" class="collapse" aria-labelledby="headingFinances" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="">Lorem</a>
            <a class="collapse-item" href="">Lorem</a>
            <a class="collapse-item" href="">Lorem</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-calendar-alt"></i>
            <span>Messages</span></a>
      </li>
<!-- Divider -->
            <hr class="sidebar-divider">
        <!-- Nav Item - Salaries -->

</ul>
</div>
<div id="sidebar_loader">
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin') }}">
      <div class="sidebar-brand-text mx-3">Administracija</div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Kontrolna tabla</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-user"></i>
        <span>Korisnici</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{ route('userslist') }}">Lista korisnika</a>
          <a class="collapse-item" href="{{ route('listroles') }}">Uloge korisnika</a>
        </div>
      </div>
    </li>
      
    <li class="nav-item">
      <a class="nav-link" href="{{ route('listproducts') }}">
        <i class="fas fa-fw fa-tasks"></i>
        <span>Proizvodi</span>
      </a>
    </li>
      
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFinances" aria-expanded="true" aria-controls="collapseFinances">
        <i class="fas fa-fw fa-cart-arrow-down"></i>
        <span>Narudžbine</span>
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
        <i class="fas fa-fw fa-envelope"></i>
        <span>Poruke</span>
      </a>
    </li>
<!-- Divider -->
    <hr class="sidebar-divider">
  </ul>
</div>
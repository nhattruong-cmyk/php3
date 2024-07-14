
<div class="sidebar-card">
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Quản Lí
    </div>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
          aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Phân Quyền</span>
      </a>
  </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Đọc Giả</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('listcategory') }}" data-toggle="collapse"
            data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Loại Sách</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('listproduct') }}" data-toggle="collapse"
            data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Sách</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('listrole') }}" data-toggle="collapse"
            data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Phân Quyền</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('home') }}" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Client</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
</div>
<style>
 /* Card Container Styles */
.sidebar-card {
    background-color: #fff; /* White background for the card */
    border-radius: 5px; /* Rounded corners */
    padding: 15px; /* Inner padding */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
}

/* Sidebar Styles */
.sidebar-card .sidebar {
    background: linear-gradient(180deg, #2395a9 10%, #2395a9 100%);
    border-radius: 5px; /* Make the sidebar fit the card container */
    padding: 15px; /* Inner padding for the sidebar */
    color: #fff;
    margin: -15px; /* Remove extra padding from parent card */
}

/* Nav Item - General Styles */
.sidebar-card .nav-item {
    position: relative;
}

.sidebar-card .nav-link {
    color: #fff;
    font-weight: normal;
    transition: color 0.3s ease, background-color 0.3s ease;
}

/* Nav Link - Hover and Active State */
.sidebar-card .nav-link:hover {
    color: #00bfff;
    background-color: rgba(255, 255, 255, 0.1);
}

.sidebar-card .nav-item.active .nav-link {
    font-weight: bold;
    background-color: rgba(255, 255, 255, 0.2);
}

/* Divider Styles */
.sidebar-card .sidebar-divider {
    border-color: rgba(255, 255, 255, 0.2);
}

/* Sidebar Heading */
.sidebar-card .sidebar-heading {
    color: #fff;
    opacity: 0.8;
}

/* Collapse Menu Styles */
.sidebar-card .collapse-inner {
    background: #388E3C;
}

.sidebar-card .collapse-item {
    color: #fff;
}

.sidebar-card .collapse-item:hover {
    color: #1B5E20;
    background-color: rgba(255, 255, 255, 0.1);
}

/* Toggler Button */
#sidebarToggle {
    background-color: #fff;
    border: 2px solid #4CAF50;
    color: #4CAF50;
    transition: background-color 0.3s ease, color 0.3s ease;
}

#sidebarToggle:hover {
    background-color: #4CAF50;
    color: #fff;
}


</style>
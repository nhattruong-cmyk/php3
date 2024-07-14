<header class="container-fluid">

    <div class="row d-flex justify-content-between align-items-center">
      <!-- Logo Section -->
      <div class="logo col-auto">
        <img src="{{ asset('img/logo.png') }}" alt="Logo">
      </div>
  
      <!-- Search Bar Section -->
      <div class="search col-auto flex-grow-1 mx-3">
        <form class="d-flex" action="{{ route('products.search') }}" method="GET">
          <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </div>
  
      <!-- Login/Register Section -->
      <div class="navbar-nav d-flex justify-content-center align-items-center col-auto flex-row">
        <a class="nav-link mx-2" href="#">Login</a>
        <a class="nav-link mx-2" href="#">Register</a>
        <a class="nav-link mx-2" href="{{ route('admin') }}">Admin</a>
  
      </div>
  
      <!-- Cart Icon Section -->
      <div class="cart-icon col-auto">
        <i class="bi bi-bag-heart"></i>
      </div>
    </div>
  
   
  
  </header>
  
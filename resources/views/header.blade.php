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

  <!-- Navigation Bar -->
  <div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
      <div class="container-fluid d-flex justify-content-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active mx-2" aria-current="page" href="{{ route('home') }}">Home</a>
            <a class="nav-link mx-2" href="{{ route('products') }}">Product</a>
            {{-- <a class="nav-link mx-2" href="{{ route('proHome') }}">Product Home</a>
            <a class="nav-link mx-2" href="{{ route('khuyenmai') }}">BestSeller</a> --}}
            <a class="nav-link mx-2" href="{{ route('blog') }}">Blog</a>
            <a class="nav-link mx-2" href="#">About</a>
            <a class="nav-link mx-2" href="#">Contact</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
  

</header>

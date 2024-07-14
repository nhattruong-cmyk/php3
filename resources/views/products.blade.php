@extends('layout')
@section('title', 'Sản phẩm')
@section('content')
    <div class="container">

        <div class="row mt-4">

            <div class="col-3 ">
                <label>Lọc sản phẩm theo danh mục</label>
                <ul class="list-group">

                    
                    <li class="list-group-item active" aria-current="true">Danh mục sản phẩm</li>
                    @foreach($dsdm as $item)
                    <li class="list-group-item"> <a href="{{ route('productsByCategoryId', $item->id) }}">{{ $item->name }}</a> </li>
                    
                    @endforeach

                    
                </ul>
                <br>
                <label>Bài viết có thể bạn quan tâm</label>

                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/Guitar Fender CD60ce/Guitar Fender CD60ce.jpg" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Bài Viết</h5>
                                <!-- Sử dụng lớp text-truncate để cắt ngắn đoạn văn bản -->
                                <p class="card-text text-truncate">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/Guitar Fender CD60ce/Guitar Fender CD60ce.jpg" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Bài Viết</h5>
                                <!-- Sử dụng lớp text-truncate để cắt ngắn đoạn văn bản -->
                                <p class="card-text text-truncate">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/Guitar Fender CD60ce/Guitar Fender CD60ce.jpg" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Bài Viết</h5>
                                <!-- Sử dụng lớp text-truncate để cắt ngắn đoạn văn bản -->
                                <p class="card-text text-truncate">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/Guitar Fender CD60ce/Guitar Fender CD60ce.jpg" class="img-fluid rounded-start"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Bài Viết</h5>
                                <!-- Sử dụng lớp text-truncate để cắt ngắn đoạn văn bản -->
                                <p class="card-text text-truncate">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-9">
                <div class="row d-flex justify-content-between ">
                    <div class="col-7">
                        <label>Tìm kiếm sản phẩm</label>
                        <form class="d-flex" action="{{ route('products.search') }}" method="GET">
                            <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <label>Lọc theo giá</label>
                        <div class="dropdown ">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Từ cao đến thấp
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>

                </div>



                <div class="row mt-4">

                    @foreach ($dssp as $item)

                    <div class="col-4 mt-4">
                        
                        <div class="card" style="width: 18rem;">
                           
                                <img src="{{ $item->img }}" alt="...">
                           
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                                    <p class="card-text text-danger">{{ number_format($item->price, 0, '.',',') }} VND</p>
                                <a href="{{ route('productDetail', $item->id) }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    
                       
                    </div>

                    @endforeach
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {{ $dssp->links('pagination::default') }}
                      
                    </ul>
                  </nav>

                  <style>
                    /* Định dạng cơ bản cho pagination */
.pagination {
    display: flex;
    justify-content: center;
    padding: 1rem;
    margin: 1rem 0;
    list-style: none;
    border-radius: 0.25rem;
}

/* Định dạng cho từng item (li) */
.pagination li {
    margin: 0 0.25rem;
}

/* Định dạng cho link trong pagination */
.pagination a {
    color: #007bff; /* Màu xanh bootstrap */
    text-decoration: none;
    padding: 0.5rem 0.75rem;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    transition: background-color 0.2s, color 0.2s;
}

/* Hiệu ứng hover */
.pagination a:hover {
    background-color: #007bff;
    color: white;
}

/* Định dạng cho item đang hoạt động */
.pagination .active span {
    background-color: #007bff;
    border-color: #007bff;
    color: white;
    padding: 0.5rem 0.75rem;
    border-radius: 0.25rem;
}

/* Định dạng cho item bị vô hiệu hóa */
.pagination .disabled span {
    color: #6c757d;
    pointer-events: none;
    padding: 0.5rem 0.75rem;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
}

/* Tùy chỉnh kích thước và font chữ */
.pagination a, .pagination .active span, .pagination .disabled span {
    font-size: 1rem; /* Kích thước chữ */
}

/* Tùy chỉnh cho các icon mũi tên nếu có */
.pagination .page-item .page-link {
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Thêm đổ bóng cho pagination */
.pagination a, .pagination .active span, .pagination .disabled span {
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
}

/* Responsive: Giảm kích thước trên thiết bị nhỏ */
@media (max-width: 576px) {
    .pagination a, .pagination .active span, .pagination .disabled span {
        padding: 0.4rem 0.5rem;
        font-size: 0.875rem;
    }
}

                  </style>

                
            </div>
        </div>

    </div>

@endsection

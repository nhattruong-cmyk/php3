@extends('layout')
@section('title', 'Chi tiết sản phẩm')
@section('content')

<div class="container my-5">
    <div class="row">
        <!-- Hình ảnh sản phẩm -->
        <div class="col-md-6">
            <img src="{{ $sp->img }}" class="product-image img-fluid" alt="Product Image">
        </div>
        <!-- Chi tiết sản phẩm -->
        <div class="col-md-6">
            <h1 class="display-5">{{ $sp->name }}</h1>
            <p class="text-muted">Mã sản phẩm: {{ $sp->id }}</p>
            <h2 class="text-danger">{{ number_format($sp->price, 0, '.',',') }} VND</h2>
           
            <hr>
            <h3>Mô Tả Chi Tiết</h3>
            <p>
                {{ $sp->description }}
            </p>
            <button class="btn btn-primary btn-lg">Thêm vào giỏ hàng</button>
        </div>
    </div>
    <!-- Sản phẩm liên quan -->
    <div class="related-products my-5">
        <h2 class="mb-4">Sản Phẩm Liên Quan</h2>
        <div class="row">
            @foreach($splq as $item)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ $item->img }}" class="card-img-top" alt="Related Product 1">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">Giá: {{ number_format($item->price, 0, '.',',') }} VND</p>
                        <a href="{{ route('productDetail', $item->id) }}" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</div>

@endsection

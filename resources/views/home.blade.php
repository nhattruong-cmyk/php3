@extends('layout')
@section('title', 'Shopmany')
@section('content')
<div class="container">

    <br>

    <div class="flex-grow-1 border-bottom border-danger"></div>
    <h2 class="text-danger text-center">SẢN PHẨM MỚI</h2>
    <div class="flex-grow-1 border-bottom border-danger"></div>

    <div class="row mt-4">
     
        @foreach($newProducts as $item)
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

<br>

    <div class="flex-grow-1 border-bottom border-danger"></div>
    <h2 class="text-danger text-center">SẢN PHẨM XEM NHIỀU</h2>
    <div class="flex-grow-1 border-bottom border-danger"></div>
   
      <div class="row mt-4">
     
        @foreach($viewProducts as $item)
        <div class="col-md-3">
            <div class="card">
                <img src="{{ $item->img }}" class="card-img-top" alt="Related Product 1">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <h5 class="card-title">Lượt xem: {{ $item->view }}</h5>
                    <p class="card-text">Giá: {{ number_format($item->price, 0, '.',',') }} VND</p>
                    <a href="{{ route('productDetail', $item->id) }}" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>

    <br>

    <div class="flex-grow-1 border-bottom border-danger"></div>
    <h2 class="text-danger text-center">BÀI VIẾT</h2>
    <div class="flex-grow-1 border-bottom border-danger"></div>

    <div class="row mt-4">
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="img/Guitar acoustic hồng đào full NOVA160/Guitar acoustic hồng đào full NOVA160.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="img/Guitar acoustic mahogany NOVA140/Guitar acoustic mahogany NOVA140 hình 2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="img/Guitar acoustic mahogany NOVA140/Guitar acoustic mahogany NOVA140.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="img/Guitar enya x1 – Chính hãng giá rẻ nhất/Guitar enya x1 – Chính hãng giá rẻ nhất hình 3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
        </div>
    </div>

</div>


@endsection

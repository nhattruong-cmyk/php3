@extends('admin.layout-admin')
@section('titlepage', 'Control Panel')
@section('content')


<form action="{{ route('updatePro', $product->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="card">
    <div class="card-header">
      <h4>Thêm Sản Phẩm Mới</h4>
    </div>
    <div class="card-body">
      <div class="form-group mb-3">
        <label for="productName">Nhập Tên Sản Phẩm</label>
        <input type="text" name="name" value="{{ $product->name }}" class="form-control" id="productName" placeholder="Tên Sản Phẩm...">
      </div>

      <div class="form-group mb-3">
        <label for="productPrice">Nhập Giá</label>
        <input type="text" name="price" value="{{ $product->price }}" class="form-control" id="productPrice" placeholder="Giá...">
      </div>

      <div class="form-group mb-3">
        <label for="productDescription">Nhập Mô Tả</label>
       <textarea name="description" cols="110" rows="5">{{ $product->description }}</textarea>
      </div>

      <div class="form-group mb-3">
        <label for="productImage">Nhập Hình Ảnh</label>
        <input type="file" name="img" class="form-control" id="productImage">
        <img width="120" src="{{ asset($product->img) }}" alt="Hình ảnh sản phẩm">
    </div>


      <div class="form-group mb-4">
        <label for="productCategory">Danh Mục Sản Phẩm</label>
        <select name="category_id" class="form-select" id="productCategory">
            <option value="0" {{ $product->category_id == 0 ? 'selected' : '' }}>Open this select menu</option>
            @foreach($categories as $item)
                <option value="{{ $item->id }}" {{ $product->category_id == $item->id ? 'selected' : '' }}>
                    {{ $item->name }}
                </option>
            @endforeach
        </select>
    </div>
    
      
      <div class="d-flex justify-content-between">
        <input type="hidden" name="id" value="{{ $product->id }}">
        <input class="btn btn-primary" type="submit" value="Cập Nhật">
        <a href="{{ route('listproduct') }}" class="btn btn-secondary btn-sm">Danh Sách</a>
      </div>
    </div>
  </div>
</form>



@endsection


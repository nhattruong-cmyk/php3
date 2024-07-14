@extends('admin.layout-admin')
@section('titlepage', 'Control Panel')
@section('content')


<form action="{{ route('insertPro') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="card">
    <div class="card-header">
      <h4>Thêm Sản Phẩm Mới</h4>
    </div>
    <div class="card-body">
      <div class="form-group mb-3">
        <label for="productName">Nhập Tên Sản Phẩm</label>
        <input type="text" name="name" class="form-control" id="productName" placeholder="Tên Sản Phẩm...">
      </div>

      <div class="form-group mb-3">
        <label for="productPrice">Nhập Giá</label>
        <input type="text" name="price" class="form-control" id="productPrice" placeholder="Giá...">
      </div>

      <div class="form-group mb-3">
        <label for="productDescription">Nhập Mô Tả</label>
        <input type="text" name="description" class="form-control" id="productDescription" placeholder="Mô tả sản phẩm...">
      </div>

      <div class="form-group mb-3">
        <label for="productImage">Nhập Hình Ảnh</label>
        <input type="file" name="img" class="form-control" id="productImage">
      </div>

      <div class="form-group mb-4">
        <label for="productCategory">Danh Mục Sản Phẩm</label>
        <select name="category_id" class="form-select" id="productCategory">
          <option value="0" selected>Open this select menu</option>
          @foreach($categories as $item)
          <option value="{{ $item->id }}">{{ $item->name }}</option>
          @endforeach
        </select>
      </div>
      
      <div class="d-flex justify-content-between">
        <input class="btn btn-primary" type="submit" value="Thêm">
        <a href="{{ route('listproduct') }}" class="btn btn-secondary btn-sm">Danh Sách</a>
      </div>
    </div>
  </div>
</form>



@endsection


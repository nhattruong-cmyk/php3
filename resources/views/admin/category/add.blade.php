@extends('admin.layout-admin')
@section('titlepage', 'Control Panel')
@section('content')


<form action="{{ route('insertCate') }}" method="POST">
  @csrf
  <div class="card">
    <div class="card-header">
      <h4>Thêm Sản Phẩm Mới</h4>
    </div>
    <div class="card-body">
      <div class="form-group mb-3">
        <label for="categoryName">Tên Danh Mục</label>
        <input type="text" name="name" class="form-control" id="categoryName" placeholder="Nhập tên danh mục...">
      </div>
      {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}

      <div class="d-flex justify-content-between">
        <input class="btn btn-primary" type="submit" value="Thêm">
        <a href="{{ route('listcategory') }}" class="btn btn-secondary btn-sm">Danh Sách</a>
      </div>
    </div>
   
  </div>
</form>



@endsection


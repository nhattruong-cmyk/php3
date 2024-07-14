@extends('admin.layout-admin')
@section('titlepage', 'Control Panel')
@section('content')


<form action="{{ route('insertRole') }}" method="POST">
  @csrf
  <div class="card">
    <div class="card-header">
      <h4>Thêm Phân Quyền</h4>
    </div>
    <div class="card-body">
      <div class="form-group mb-3">
        <label for="roleName">Tên Phân Quyền</label>
        <input type="text" name="role_name" class="form-control" id="roleName" placeholder="Nhập tên phân quyền...">
      </div>
      {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
      <div class="form-group mb-3">
        <label for="roleName">Mô tả</label>
        <input type="text" name="description" class="form-control" id="description" placeholder="Mô tả phần quyền...">
      </div>
      <div class="d-flex justify-content-between">
        <input class="btn btn-primary" type="submit" value="Thêm">
        <a href="{{ route('listrole') }}" class="btn btn-secondary btn-sm">Danh Sách</a>
      </div>
    </div>
   
  </div>
</form>



@endsection


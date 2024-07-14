@extends('admin.layout-admin')
@section('titlepage', 'Control Panel')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center bg-info text-white rounded-top">
            <!-- Title Section -->
            <h4 class="my-0 mx-2">Danh Sách Sản Phẩm</h4>

            <!-- Search Bar Section -->
            <div class="d-flex flex-grow-1 mx-3">
                <form class="d-flex w-100" action="{{ route('products.search') }}" method="GET">
                    <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>

            <!-- Button Section -->
            <div class="d-flex">
                <a href="{{ route('formaddcategory') }}" class="btn btn-light btn-sm text-info me-2">Thêm</a>
                <button type="button" id="deleteSelected" class="btn btn-danger btn-sm">Xóa</button>
            </div>
        </div>


        <form id="deleteForm" action="{{ route('deleteSelectedCategories') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="bg-light text-primary">
                                <th class="text-center" scope="col"><input class="form-check-input" type="checkbox" id="selectAll"></th>
                                <th class="text-center" style="width: 10%;">#</th>
                                <th class="text-center" style="width: 70%;">Tên Danh Mục</th>
                                <th class="text-center" style="width: 20%;">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="bg-light text-primary">
                                <th class="text-center" scope="col">
                                    <input class="form-check-input" type="checkbox" id="selectAllFooter">
                                </th>
                                <th class="text-center" style="width: 10%;">#</th>
                                <th class="text-center" style="width: 70%;">Tên Danh Mục</th>
                                <th class="text-center" style="width: 20%;">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($categories as $item)
                                <tr>
                                    <td class="text-center">
                                        <input class="form-check-input category-checkbox" type="checkbox" name="ids[]"
                                            value="{{ $item->id }}">
                                    </td>
                                    <td class="text-center border">{{ $item->id }}</td>
                                    <td class="border">{{ $item->name }}</td>
                                    <td class="text-center border">
                                        <a href="#" class="btn btn-warning btn-sm"
                                            onclick="editCategory({{ $item->id }})">
                                            <i class="bi bi-pencil"></i> Sửa
                                        </a>
                                        <a href="{{ route('deleteCate', $item->id) }}" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Bạn có chắc chắn muốn xóa mục này không?');">
                                            <i class="bi bi-trash"></i> Xóa
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            {{ $categories->links('pagination::default') }}
                        </ul>
                    </nav>
                </div>

            </div>
        </form>
    </div>
    <script>
        document.getElementById('selectAll').addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('.category-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });
    
        document.getElementById('deleteSelected').addEventListener('click', function() {
            const form = document.getElementById('deleteForm');
            const selectedCheckboxes = document.querySelectorAll('.category-checkbox:checked');
    
            if (selectedCheckboxes.length > 0) {
                if (confirm('Bạn có chắc chắn muốn xóa các sản phẩm đã chọn không?')) {
                    form.submit();
                }
            } else {
                alert('Vui lòng chọn ít nhất một sản phẩm để xóa.');
            }
        });
    </script>
    
    <script>
        document.getElementById('selectAll').addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('.category-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });
    </script>
@endsection





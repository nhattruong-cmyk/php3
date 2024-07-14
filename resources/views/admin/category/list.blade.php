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

<style>
    /* Định dạng cơ bản cho pagination */
    .pagination {
        display: flex;
        justify-content: center;
        padding: 0.5rem;
        margin: 0.5rem 0;
        list-style: none;
        border-radius: 0.25rem;
    }

    /* Định dạng cho từng item (li) */
    .pagination li {
        margin: 0 0.15rem;
    }

    /* Định dạng cho link trong pagination */
    .pagination a {
        color: #007bff;
        /* Màu xanh bootstrap */
        text-decoration: none;
        padding: 0.3rem 0.5rem;
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
        padding: 0.3rem 0.5rem;
        border-radius: 0.25rem;
    }

    /* Định dạng cho item bị vô hiệu hóa */
    .pagination .disabled span {
        color: #6c757d;
        pointer-events: none;
        padding: 0.3rem 0.5rem;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
    }

    /* Tùy chỉnh kích thước và font chữ */
    .pagination a,
    .pagination .active span,
    .pagination .disabled span {
        font-size: 0.875rem;
        /* Kích thước chữ nhỏ hơn */
    }

    /* Tùy chỉnh cho các icon mũi tên nếu có */
    .pagination .page-item .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Thêm đổ bóng cho pagination */
    .pagination a,
    .pagination .active span,
    .pagination .disabled span {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }

    /* Responsive: Giảm kích thước trên thiết bị nhỏ */
    @media (max-width: 576px) {

        .pagination a,
        .pagination .active span,
        .pagination .disabled span {
            padding: 0.25rem 0.4rem;
            font-size: 0.75rem;
        }
    }
</style>




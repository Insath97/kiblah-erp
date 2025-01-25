@extends('admin.layouts.master')

@section('content')
    <div class="dashboard-main-body">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
            <h6 class="fw-semibold mb-0">Products</h6>
            <ul class="d-flex align-items-center gap-2">
                <li class="fw-medium">
                    <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                        Dashboard
                    </a>
                </li>
                <li>-</li>
                <li class="fw-medium">Category</li>
            </ul>
        </div>

        <div class="card basic-data-table">
            <div class="card-header d-flex justify-content-end align-items-center">
                <button class="btn btn-primary-600 btn-sm ms-auto d-flex align-items-center" data-bs-toggle="modal"
                    data-bs-target="#CategoryModal">
                    <iconify-icon icon="mdi:plus" class="menu-icon"></iconify-icon>
                    Create New
                </button>
            </div>
            <div class="card-body">
                <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                    <thead>
                        <tr>
                            <th scope="col">
                                <div class="form-check style-check d-flex align-items-center">
                                    #
                                </div>
                            </th>
                            <th scope="col">Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($product_category->count() > 0)
                            @foreach ($product_category as $item)
                                <tr>
                                    <td>
                                        <div class="form-check style-check d-flex align-items-center">
                                            <input class="form-check-input" type="hidden">
                                            <label class="form-check-label">
                                                {{ $loop->iteration }}
                                            </label>
                                        </div>
                                    </td>
                                    <td>#{{ $item->code }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <h6 class="text-md mb-0 fw-medium flex-grow-1">{{ $item->name }}</h6>
                                        </div>
                                    </td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <a href="javascript:void(0)"
                                            class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                            <iconify-icon icon="lucide:edit"></iconify-icon>
                                        </a>
                                        <a href="{{ route('admin.product-category.destroy', $item->id) }}"
                                            class="w-32-px h-32-px delete-item bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    @include('admin.product-category.create')
@endsection

@push('scripts')
    <script>
        let table = new DataTable('#dataTable');
    </script>
@endpush

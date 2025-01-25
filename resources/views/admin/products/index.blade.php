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
                <li class="fw-medium">Products</li>
            </ul>
        </div>

        <div class="card basic-data-table">
            <div class="card-header d-flex justify-content-end align-items-center">
                <!-- <h5 class="card-title mb-0">Default Datatables</h5> -->
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary-600 btn-sm ms-auto">Create Product</a>
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
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Cost Price</th>
                            {{-- <th scope="col">Unit Measurement</th> --}}
                            <th scope="col">Quantity</th>
                            <th scope="col">Threshold</th>
                            <th scope="col">status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if ($product->count() > 0)
                            @foreach ($product as $item)
                                <tr>
                                    <td>
                                        <div class="form-check style-check d-flex align-items-center">
                                            <input class="form-check-input" type="hidden">
                                            <label class="form-check-label">
                                                {{ $loop->iteration }}
                                            </label>
                                        </div>
                                    </td>
                                    <td>{{ $item->code }}</td>
                                    <td>
                                        <img src="{{ asset($item->image) }}" height="100" width="100" alt=""
                                        class="flex-shrink-0 me-12 radius-8">
                                    </td>
                                    <td> <h6 class="text-md mb-0 fw-medium flex-grow-1">{{ $item->name }}</h6></td>
                                    <td>{{ @$item->productCategory->name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->sales_price }}</td>
                                    {{-- <td>{{ $item->unit_measurement }}</td> --}}
                                    <td>{{ $item->stock_qty }}</td>
                                    <td>{{ $item->threshold }}</td>
                                    <td> <span
                                            class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Have
                                            stock</span>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)"
                                            class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                            <iconify-icon icon="lucide:edit"></iconify-icon>
                                        </a>
                                        <a href="{{ route('admin.products.destroy', $item->id) }}"
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
@endsection

@push('scripts')
    <script>
        let table = new DataTable('#dataTable');
    </script>
@endpush

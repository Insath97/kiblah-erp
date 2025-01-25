<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kiblah ERP</title>

    <link rel="icon" type="image/png" href="{{ asset('admin/assets/images/favicon.png') }}" sizes="16x16">
    <!-- remix icon font css  -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/remixicon.css') }}">
    <!-- BootStrap css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/lib/bootstrap.min.css') }}">
    <!-- Apex Chart css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/lib/apexcharts.css') }}">
    <!-- Data Table css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/lib/dataTables.min.css') }}">
    <!-- Text Editor css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/lib/editor-katex.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/lib/editor.atom-one-dark.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/lib/editor.quill.snow.css') }}">
    <!-- Date picker css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/lib/flatpickr.min.css') }}">
    <!-- Calendar css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/lib/full-calendar.css') }}">
    <!-- Vector Map css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/lib/jquery-jvectormap-2.0.5.css') }}">
    <!-- Popup css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/lib/magnific-popup.css') }}">
    <!-- Slick Slider css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/lib/slick.css') }}">
    <!-- prism css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/lib/prism.css') }}">
    <!-- file upload css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/lib/file-upload.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/lib/audioplayer.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">

    <style>
        .swal2-popup {
            font-size: 14px !important;
            /* Adjust font size here */
        }
    </style>
</head>

<body>

    {{-- side bar start --}}
    @include('admin.layouts.sidebar')
    {{-- side bar end --}}

    <main class="dashboard-main">

        {{-- navbar start --}}
        @include('admin.layouts.navbar')
        {{-- navbar end --}}

        {{-- content start --}}
        @yield('content')
        {{-- content end --}}

        {{-- footer start --}}
        @include('admin.layouts.footer')
        {{-- footer end --}}

    </main>

    <!-- jQuery library js -->
    <script src="{{ asset('admin/assets/js/lib/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('admin/assets/js/lib/bootstrap.bundle.min.js') }}"></script>
    <!-- Apex Chart js -->
    <script src="{{ asset('admin/assets/js/lib/apexcharts.min.js') }}"></script>
    <!-- Data Table js -->
    <script src="{{ asset('admin/assets/js/lib/dataTables.min.js') }}"></script>
    <!-- Iconify Font js -->
    <script src="{{ asset('admin/assets/js/lib/iconify-icon.min.js') }}"></script>
    <!-- jQuery UI js -->
    <script src="{{ asset('admin/assets/js/lib/jquery-ui.min.js') }}"></script>
    <!-- Vector Map js -->
    <script src="{{ asset('admin/assets/js/lib/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/lib/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- Popup js -->
    <script src="{{ asset('admin/assets/js/lib/magnifc-popup.min.js') }}"></script>
    <!-- Slick Slider js -->
    <script src="{{ asset('admin/assets/js/lib/slick.min.js') }}"></script>
    <!-- prism js -->
    <script src="{{ asset('admin/assets/js/lib/prism.js') }}"></script>
    <!-- file upload js -->
    <script src="{{ asset('admin/assets/js/lib/file-upload.js') }}"></script>
    <!-- audioplayer -->
    <script src="{{ asset('admin/assets/js/lib/audioplayer.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // add csrf token in ajx request
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /* set delete common function */
        $(document).ready(function() {
            $('.delete-item').on('click', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = $(this).attr('href');
                        $.ajax({
                            method: "DELETE",
                            url: url,
                            data: {
                                _token: $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(data) {
                                if (data.status === 'success') {
                                    Swal.fire({
                                        title: 'Deleted!',
                                        text: data.message,
                                        icon: 'success'
                                    }).then(() => {
                                        window.location.reload();
                                    });
                                } else if (data.status === 'error') {
                                    Swal.fire({
                                        title: 'Error!',
                                        text: data.message,
                                        icon: 'error'
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'An error occurred while deleting the item.',
                                    icon: 'error'
                                });
                            }
                        });
                    }
                });
            });
        });

        /* set toast */
        @if (session('toast'))
            Swal.fire({
                toast: true,
                position: 'top-end', // Top-right corner
                icon: "{{ session('toast')['type'] }}", // success, error, warning, info
                title: "{{ session('toast')['message'] }}",
                showConfirmButton: false,
                timer: {{ session('toast')['autoClose'] ?? 3000 }}, // Default to 3 seconds
                timerProgressBar: true,
            });
        @endif
    </script>

    @include('sweetalert::alert')

    @stack('scripts')
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Birol Emlak Yönetim Paneli</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
  <!-- End plugin css for this page -->
    <!-- End fonts -->
    <link rel="shortcut icon" href="{{url('public/assets/images/favicon.png')}}">
    <!-- core:css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    @vite(['public/backend/assets/vendors/core/core.css',
 'public/backend/assets/vendors/flatpickr/flatpickr.min.css',
  'public/backend/assets/fonts/feather-font/css/iconfont.css',
   'public/backend/assets/vendors/flag-icon-css/css/flag-icon.min.css',
    'public/backend/assets/css/demo2/style.css',
     'public/backend/assets/images/favicon.png','public/backend/assets/vendors/select2/select2.min.css',
                'public/backend/assets/vendors/jquery-tags-input/jquery.tagsinput.min.css'])
    <!-- End layout styles -->
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.body.sidebar')
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            @include('admin.body.header')
            <!-- partial -->

            @yield('admin')

            <!-- partial:partials/_footer.html -->
            @include('admin.body.footer')
            <!-- partial -->

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- core:js -->
    @vite(['public/backend/assets/vendors/core/core.js',
 'public/backend/assets/vendors/flatpickr/flatpickr.min.js',
  'public/backend/assets/vendors/apexcharts/apexcharts.min.js',
   'public/backend/assets/vendors/feather-icons/feather.min.js',
    'public/backend/assets/js/template.js', 'public/backend/assets/js/dashboard-dark.js',
    'public/backend/assets/vendors/datatables.net/jquery.dataTables.js',
    'public/backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js',
    'public/backend/assets/js/data-table.js','public/backend/assets/js/code/code.js',
    'public/backend/assets/js/code/validate.min.js','public/backend/assets/vendors/inputmask/jquery.inputmask.min.js',
                'public/backend/assets/vendors/select2/select2.min.js',
                'public/backend/assets/vendors/typeahead.js/typeahead.bundle.min.js',
                'public/backend/assets/vendors/jquery-tags-input/jquery.tagsinput.min.js',
                'public/backend/assets/js/inputmask.js',
                'public/backend/assets/js/select2.js',
                'public/backend/assets/js/typeahead.js',
                'public/backend/assets/js/tags-input.js', 'public/backend/assets/vendors/tinymce/tinymce.min.js',
                'public/backend/assets/js/tinymce.js'])

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if(Session::has('message'))
        let type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;

            case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;

            case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;

            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
        @endif
    </script>

</body>

</html>

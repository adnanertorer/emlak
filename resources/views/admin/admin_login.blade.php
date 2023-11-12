<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Birol Emlak - Yönetici Panel Girişi</title>

    <style>
        .authlogin-side-wrapper{
            width: 100%;
            height: 100%;
            background-image: url({{ asset('upload/login.png') }});
        }
    </style>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    @vite(['public/backend/assets/vendors/core/core.css',
'public/backend/assets/fonts/feather-font/css/iconfont.css',
 'public/backend/assets/vendors/flag-icon-css/css/flag-icon.min.css',
   'public/backend/assets/vendors/flatpickr/flatpickr.min.css',
   'public/backend/assets/css/demo2/style.css', 'public/backend/assets/images/favicon.png'])
</head>
<body>
<div class="main-wrapper">
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">

            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-6 mx-auto">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4 pe-md-0">
                                <div class="authlogin-side-wrapper">

                                </div>
                            </div>
                            <div class="col-md-8 ps-md-0">
                                <div class="auth-form-wrapper px-4 py-5">
                                    <a href="#" class="noble-ui-logo logo-light d-block mb-2">Birol<span> Emlak</span></a>
                                    <h5 class="text-muted fw-normal mb-4">Yönetim paneline buradan girebilirsiniz.</h5>
                                    <form class="forms-sample" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="login" class="form-label">Email/Name/Phone</label>
                                            <input type="text" name="login" class="form-control" id="login" placeholder="Email/Name/Phone">
                                        </div>
                                        <div class="mb-3">
                                            <label for="userPassword" class="form-label">Parola</label>
                                            <input type="password" name="password" class="form-control" id="userPassword" autocomplete="current-password" placeholder="Password">
                                        </div>
                                        <div class="form-check mb-3">
                                            <input type="checkbox" class="form-check-input" id="authCheck">
                                            <label class="form-check-label" for="authCheck">
                                                Remember me
                                            </label>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                                Giriş
                                            </button>
                                        </div>
                                        <a href="register.html" class="d-block mt-3 text-muted">Not a user? Sign up</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@vite(['public/backend/assets/vendors/core/core.js',
'public/backend/assets/vendors/feather-icons/feather.min.js',
 'public/backend/assets/js/template.js'])

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
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

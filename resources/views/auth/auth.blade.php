<!DOCTYPE html>
<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr"data-theme="theme-default" data-assets-path="/auth/assets/" data-template="vertical-menu-template-no-customizer">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title', 'SIAZAKI')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/auth/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/auth/assets/vendor/fonts/fontawesome.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('/auth/assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('/auth/assets/vendor/css/rtl/theme-default.css') }}" />

    <link rel="stylesheet" href="{{ asset('/auth/assets/vendor/libs/@form-validation/umd/styles/index.min.css') }}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('/auth/assets/vendor/css/pages/page-auth.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('/auth/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('/auth/assets/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="authentication-wrapper authentication-cover authentication-bg">
        @yield('content')
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('/auth/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('/auth/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('/auth/assets/vendor/js/bootstrap.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('/auth/assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
    <script src="{{ asset('/auth/assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('/auth/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('/auth/assets/js/pages-auth.js') }}"></script>
  </body>
</html>

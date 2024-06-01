<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="/auth/assets/"
  data-template="vertical-menu-template-no-customizer">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login</title>

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
      <div class="authentication-inner row">
        <!-- /Left Text -->
        <div class="d-none d-lg-flex col-lg-7 p-0">
          <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
            <img
              src="{{ asset('/auth//assets/img/illustrations/auth-login-illustration-light.png') }}"
              alt="auth-login-cover"
              class="img-fluid my-5 auth-illustration" />

            <img
              src="{{ asset('/auth//assets/img/illustrations/bg-shape-image-light.png') }}"
              alt="auth-login-cover"
              class="platform-bg" />
          </div>
        </div>
        <!-- /Left Text -->

        <!-- Login -->
        <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
          <div class="w-px-400 mx-auto">
            <!-- Logo -->
            <div class="app-brand mb-4">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                </span>
              </a>
            </div>
            <!-- /Logo -->
            <h3 class="mb-1">SIAZAKI</h3>
            <p class="mb-4">Sistem Informasi Administrasi Zakat Fitrah</p>

            <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Enter your valid email"
                  autofocus required/>
              </div>
              <div class="mb-3 form-password-toggle">
                @if (Route::has('password.request'))
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                  <a href="{{ route('password.request') }}">
                    <small>Forgot Password?</small>
                  </a>
                </div>
                @endif

                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember-me" />
                  <label class="form-check-label" for="remember-me"> Ingat saya </label>
                </div>
              </div>
              <button class="btn btn-primary d-grid w-100">Masuk</button>
            </form>

            @if (Route::has('register'))
            <p class="text-center">
              <span>Belum punya akun?</span>
              <a href="{{ route('register') }}">
                <span>Daftar disini</span>
              </a>
            </p>
            @endif
          </div>
        </div>
        <!-- /Login -->
      </div>
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

@extends('auth.auth');
@section('title', 'Registrasi');
@section('content')
<div class="authentication-inner row">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 p-0">
        <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
        <img
            src="{{ asset('/auth//assets/img/illustrations/auth-login-illustration-light.png') }}"
            alt="auth-register-cover"
            class="img-fluid my-5 auth-illustration" />

        <img
            src="{{ asset('/auth/assets/img/illustrations/bg-shape-image-light.png') }}"
            alt="auth-register-cover"
            class="platform-bg" />
        </div>
    </div>
    <!-- /Left Text -->

    <!-- Register -->
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

        <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                placeholder="Enter your username"
                autofocus />
            </div>
            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" />
            </div>
            <div class="mb-3 form-password-toggle">
            <label class="form-label" for="password">Password</label>
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

            <div class="mb-3 form-password-toggle">
            <label class="form-label" for="password">Password Confirmation</label>
            <div class="input-group input-group-merge">
                <input
                type="password"
                id="password_confirmation"
                class="form-control"
                name="password_confirmation"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
            </div>
            </div>

            <button class="btn btn-primary d-grid w-100 mt-6">Registrasi Akun</button>
        </form>

        <p class="text-center">
            <span>Sudah Punya Akun?</span>
            <a href="{{ route('login') }}">
            <span>Masuk</span>
            </a>
        </p>
        </div>
    </div>
    <!-- /Register -->
</div>
@endsection;

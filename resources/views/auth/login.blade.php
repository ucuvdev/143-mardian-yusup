@extends('auth.auth');
@section('title', 'Login');
@section('content')
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
                <small>Lupa Password?</small>
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
            <span>Registrasi disini</span>
            </a>
        </p>
        @endif
        </div>
    </div>
    <!-- /Login -->
</div>
@endsection;

@extends('layouts.app')

@section('title', 'Login')
@section('description', 'Halaman login untuk masuk ke sistem e-Filing.')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <!-- Left image -->
                <div class="col-md-6 d-none d-md-flex justify-content-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Login illustration">
                </div>

                <!-- Login form -->
                <div class="col-md-6 col-xl-4">
                    <div class="card shadow-lg border-0 p-4 rounded-4">
                        <h2 class="text-center mb-4 fw-bold">Login</h2>

                        <!-- Form POST -->
                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" id="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" placeholder="Enter a valid email address" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    placeholder="Enter password" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Remember & Forgot -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                                {{-- <a href="{{ route('password.request') }}" class="text-primary small">Forgot password?</a> --}}
                            </div>

                            <!-- Submit -->
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">Login</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

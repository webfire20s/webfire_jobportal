@extends('web-layout')
@section('title', 'Login')
@section('content')

<style>
    body {
        background: linear-gradient(135deg, #5636d6 0%, #3b82f6 100%);
        font-family: 'Poppins', sans-serif;
        min-height: 100vh;
    }

    .login-card {
        max-width: 420px;
        margin: 80px auto;
        background: #ffffff;
        border: none;
        border-radius: 16px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        transition: all 0.3s ease-in-out;
    }

    .login-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.2);
    }

    .login-header {
        background: linear-gradient(135deg, #3b82f6, #5636d6);
        color: #fff;
        text-align: center;
        padding: 30px 25px;
    }

    .login-header h4 {
        font-weight: 600;
        font-size: 1.5rem;
        margin-bottom: 8px;
    }

    .login-header p {
        opacity: 0.9;
        font-size: 0.95rem;
    }

    .login-body {
        padding: 30px;
    }

    .form-label {
        font-weight: 600;
        color: #222;
    }

    .form-control {
        border-radius: 10px;
        padding: 12px 15px;
        border: 1px solid #ddd;
        background-color: #f9f9f9;
        transition: all 0.3s ease-in-out;
    }

    .form-control:focus {
        border-color: #3b82f6;
        background-color: #fff;
        box-shadow: 0 0 0 0.2rem rgba(59, 130, 246, 0.25);
    }

    .btn-login {
        background: linear-gradient(135deg, #5636d6, #3b82f6);
        border: none;
        border-radius: 10px;
        padding: 12px;
        font-weight: 600;
        font-size: 1rem;
        transition: 0.3s;
        color: #fff;
    }

    .btn-login:hover {
        background: linear-gradient(135deg, #3b82f6, #5636d6);
        transform: scale(1.03);
    }

    .extra-links {
        text-align: center;
        margin-top: 15px;
    }

    .extra-links a {
        color: #3b82f6;
        text-decoration: none;
        font-weight: 500;
    }

    .extra-links a:hover {
        text-decoration: underline;
    }

    .text-muted {
        font-size: 0.9rem;
    }
</style>

<div class="container">
    <div class="login-card">
        <div class="login-header">
            <h4>Welcome Back 👋</h4>
            <p>Please log in to your account</p>
        </div>
        <div class="login-body">
            <form id="loginForm" method="POST" action="{{ url('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control"
                        placeholder="Enter your email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control"
                        placeholder="Enter your password" required>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember" class="ms-1 text-muted">Remember Me</label>
                    </div>
                    <a href="#" class="small text-decoration-none text-primary fw-semibold">Forgot Password?</a>
                </div>

                <button type="submit" class="btn btn-login w-100">Login</button>

                <div class="extra-links mt-3">
                    <p class="mb-0 text-muted">Don't have an account?
                        <a href="{{ url('sign_up') }}">Sign up</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

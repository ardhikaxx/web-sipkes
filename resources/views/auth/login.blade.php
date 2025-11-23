@extends('layouts.auth')

@section('title', 'Login')

@section('content')

<div class="card shadow-lg border-0 auth-card">
    <div class="row g-0">

        {{-- Left Logo Section --}}
        <div class="col-md-6 d-flex justify-content-center align-items-center bg-light p-4 auth-left">
            <div class="text-center">
                <img src="{{ asset('images/logosipkes.png') }}" width="320" class="mb-3">
            </div>
        </div>

        {{-- Right Form Section --}}
        <div class="col-md-6 p-5">
            <h3 class="fw-bold text-dark">Welcome to SIP-Kes</h3>
            <p class="text-muted mb-4">Your Admin Dashboard</p>

            <form action="#" method="POST">
                @csrf

                {{-- Username --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Username</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white">
                            <i class="fa-solid fa-user text-primary"></i>
                        </span>
                        <input type="text" class="form-control" name="username" placeholder="Enter username">
                    </div>
                </div>

                {{-- Password --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white">
                            <i class="fa-solid fa-lock text-primary"></i>
                        </span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                        <span class="input-group-text bg-white" id="togglePassword" style="cursor: pointer;">
                            <i class="fa-solid fa-eye" id="eyeIcon"></i>
                        </span>
                    </div>
                </div>

                {{-- Remember Me --}}
                <div class="form-check mb-4">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label for="remember" class="form-check-label">Remember This Device</label>
                </div>

                {{-- Button --}}
                <button class="btn btn-primary w-100 py-2 fw-semibold">
                    Sign In
                </button>
            </form>
        </div>

    </div>
</div>

@endsection

@section('scripts')
<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePassword.addEventListener('click', () => {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        // Change icon
        if (type === 'text') {
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    });
</script>
@endsection

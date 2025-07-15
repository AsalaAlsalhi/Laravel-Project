@extends('layouts.base')

@section('title', 'Login')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="login-box p-4 rounded shadow" style="background-color: #fff2e6; width: 100%; max-width: 450px;">
        
        <h2 class="text-center mb-4" style="color: #ff7f50; font-weight: 700; font-family: 'Pacifico', cursive;">
            Login to Your Account
        </h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold" style="color: #ff7f50;">Email</label>
                <input type="email" name="email" id="email" class="form-control border-0 shadow-sm" required autofocus>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label fw-semibold" style="color: #ff7f50;">Password</label>
                <input type="password" name="password" id="password" class="form-control border-0 shadow-sm" required>
            </div>

            <button type="submit" class="btn w-100" style="background-color: #ff7f50; color: white; font-weight: 700; padding: 12px 0; border: none; border-radius: 6px;">
                Login
            </button>
        </form>
    </div>
</div>
@endsection

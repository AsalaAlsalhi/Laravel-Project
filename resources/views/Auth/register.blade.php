@extends('layouts.base')

@section('title', 'Register')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="register-box p-4 rounded shadow" style="background-color: #fff2e6; width: 100%; max-width: 450px;">
        
        <h2 class="text-center mb-4" style="color: #ff7f50; font-weight: 700; font-family: 'Pacifico', cursive;">
            Create Your Account
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

        <form method="POST" action="{{ route('register.post') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label" style="color: #ff7f50;">Full Name</label>
                <input type="text" name="name" id="name" class="form-control border-0 shadow-sm" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label" style="color: #ff7f50;">Email</label>
                <input type="email" name="email" id="email" class="form-control border-0 shadow-sm" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label" style="color: #ff7f50;">Password</label>
                <input type="password" name="password" id="password" class="form-control border-0 shadow-sm" required>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label" style="color: #ff7f50;">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control border-0 shadow-sm" required>
            </div>

            <button type="submit" class="btn btn-orange w-100" style="background-color: #ff7f50; color: white; font-weight: 600; padding: 10px 0; border: none; border-radius: 6px;">
                Register
            </button>
        </form>
    </div>
</div>
@endsection

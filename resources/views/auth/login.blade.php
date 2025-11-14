@extends('layouts.authLayout')

@section('content')
    <div class="w-full max-w-md mx-auto p-6">
        <div class="card shadow-lg">
            <div class="card-body">
                <h2 class="text-2xl font-semibold text-center mb-4">Sign in to your account</h2>

                @if (session('error'))
                    <div class="alert alert-error mb-4">
                        {{ session('error') }}
                    </div>
                @endif


                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf

                    <div class="form-control mb-3">
                        <label class="label mb-1">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus
                            class="input input-bordered w-full @error('email') input-error @enderror" />
                        @error('email')
                            <span class="text-sm text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control mb-3">
                        <label class="label mb-1">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" name="password" required
                            class="input input-bordered w-full @error('password') input-error @enderror" />
                        @error('password')
                            <span class="text-sm text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between mb-4">
                        <label class="cursor-pointer label">
                            <input type="checkbox" name="remember" class="checkbox mr-2"
                                {{ old('remember') ? 'checked' : '' }}>
                            <span class="label-text">Remember me</span>
                        </label>
                        <a href="#" class="text-sm link">Forgot password?</a>
                    </div>

                    <div class="form-control mb-3">
                        <button type="submit" class="btn btn-primary w-full">Sign In</button>
                    </div>
                </form>

                <p class="text-center text-sm mt-2">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="link">Register</a>
                </p>
            </div>
        </div>
    </div>
@endsection

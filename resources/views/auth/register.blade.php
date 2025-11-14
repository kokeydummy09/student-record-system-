@extends('layouts.authLayout')


@section('content')
    <div class="w-full max-w-md mx-auto p-6">
        <div class="card shadow-lg">
            <div class="card-body">
                <h2 class="text-2xl font-semibold text-center mb-4">Create an account</h2>

                <form method="POST" action="">
                    @csrf

                    <div class="form-control mb-3">
                        <label class="label mb-1">
                            <span class="label-text">Full name</span>
                        </label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                            class="input input-bordered w-full @error('name') input-error @enderror" />
                        @error('name')
                            <span class="text-sm text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control mb-3">
                        <label class="label mb-1">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" name="email" value="{{ old('email') }}" required
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

                    <div class="form-control mb-3">
                        <label class="label mb-1">
                            <span class="label-text">Confirm Password</span>
                        </label>
                        <input type="password" name="password_confirmation" required class="input input-bordered w-full" />
                    </div>

                    <div class="form-control mb-3">
                        <button type="submit" class="btn btn-primary w-full">Register</button>
                    </div>
                </form>

                <p class="text-center text-sm mt-2">
                    Already have an account?
                    <a href={{ route('sign-in') }} class="link">Sign in</a>
                </p>
            </div>
        </div>
    </div>
@endsection

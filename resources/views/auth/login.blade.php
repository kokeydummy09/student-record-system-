<x-layouts.auth-layout>
  <div class="mx-auto w-full max-w-md p-6">
    <div class="card shadow-lg">
      <div class="card-body">
        <h2 class="mb-4 text-center text-2xl font-semibold">Sign in to your account</h2>

        @if (session('error'))
          <div class="alert alert-error mb-4">
            {{ session('error') }}
          </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}">
          @csrf

          {{-- Email --}}
          <x-forms.text-input
            label="Email"
            name="email"
            type="email"
            :value="old('email')"
            required
            autofocus
            class="mb-3"
          />

          {{-- Password --}}
          <x-forms.text-input
            label="Password"
            name="password"
            type="password"
            required
            class="mb-3"
          />

          {{-- Demo Card --}}
          <div class="bg-base-200 border-base-300 mb-3 rounded-lg border p-3">
            <div class="flex items-center justify-between">
              <div class="font-semibold">Demo Account</div>
              <div class="text-muted text-xs">for testing</div>
            </div>

            <div class="mt-2 space-y-2 text-sm">
              <div class="flex items-center justify-between">
                <div class="text-xs opacity-75">Email</div>
                <div class="font-mono text-sm">test@example.com</div>
              </div>

              <div class="flex items-center justify-between">
                <div class="text-xs opacity-75">Password</div>
                <div class="flex items-center gap-2">
                  <div class="font-mono text-sm">test@password</div>
                </div>
              </div>

              <div class="flex gap-2 pt-2">
                <button
                  type="button"
                  id="fill-demo-btn"
                  class="btn btn-sm w-full bg-green-500 hover:bg-green-400"
                >
                  Auto Fill Form
                </button>
              </div>
            </div>
          </div>

          <div class="form-control mb-3">
            <button type="submit" class="btn btn-primary w-full">Sign In</button>
          </div>
        </form>

        <p class="mt-2 text-center text-sm">
          Don't have an account?
          <a href="{{ route('register') }}" class="link">Register</a>
        </p>
      </div>
    </div>
  </div>

  @push('scripts')
    <script src="{{ asset('js/auto-fill.js') }}"></script>
  @endpush
</x-layouts.auth-layout>

<x-layouts.auth-layout>
  <div class="mx-auto w-full max-w-md p-6">
    <div class="card shadow-lg">
      <div class="card-body">
        <h2 class="mb-4 text-center text-2xl font-semibold">Create an account</h2>

        <form
          method="POST"
          action=""
        >
          @csrf

          {{-- Full name --}}
          <x-forms.text-input
            label="Full name"
            name="name"
            :value="old('name')"
            required
            class="mb-3"
          />

          {{-- Email --}}
          <x-forms.text-input
            label="Email"
            name="email"
            type="email"
            :value="old('email')"
            required
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

          {{-- Confirm Password --}}
          <x-forms.text-input
            label="Confirm Password"
            name="password_confirmation"
            type="password"
            required
            class="mb-3"
          />

          {{-- Submit --}}
          <div class="form-control mb-3">
            <button
              type="submit"
              class="btn btn-primary w-full"
            >
              Register
            </button>
          </div>
        </form>

        <p class="mt-2 text-center text-sm">
          Already have an account?
          <a
            href="{{ route('login') }}"
            class="link"
          >Sign in</a>
        </p>
      </div>
    </div>
  </div>
</x-layouts.auth-layout>

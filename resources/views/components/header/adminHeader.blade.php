<header class="bg-base-100 border-b p-4 shadow-sm">
  <div class="mx-auto flex w-full max-w-7xl items-center justify-between">
    <div class="flex items-center gap-4">
      <a
        href="#"
        class="text-primary text-lg font-bold md:hidden"
      >SRS</a>
      <h1 class="text-lg font-semibold">{{ $title ?? 'Dashboard' }}</h1>
    </div>
    <button
      id="mobile-menu-btn"
      class="lg:hidden"
      aria-controls="mobile-sidebar"
      aria-expanded="false"
    >☰</button>

    <div class="max-lg:hidden">
      <x-buttons.logout-btn />
    </div>
  </div>
</header>
@push('scripts')
  <script src="{{ asset('js/sidebar.js') }}"></script>
@endpush

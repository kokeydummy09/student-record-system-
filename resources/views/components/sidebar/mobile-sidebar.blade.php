<x-overlay />
<aside
  id="mobile-sidebar"
  class="bg-base-100 fixed inset-y-0 left-0 z-50 flex w-64 -translate-x-full transform flex-col border-r shadow-md transition-transform"
>
  <!-- Brand -->
  <div class="border-base-300 flex items-center gap-3 border-b px-6 py-5">
    <div class="bg-primary flex h-10 w-10 items-center justify-center rounded font-bold text-white">S</div>
    <div class="flex w-full items-center justify-between">
      <div>
        <h2 class="text-sm font-semibold">SRS</h2>
        <h2 class="text-muted text-xs">Admin</h2>
      </div>
      <x-buttons.close-sidebar-btn />
    </div>
  </div>

  <!-- Navigation -->
  <nav class="flex-1 p-4">
    <ul class="space-y-2">
      <li>
        <a
          href={{ route('admin.students.index') }}
          class="hover:bg-base-200 flex items-center gap-3 rounded-lg p-3"
        >
          <svg
            class="text-primary h-5 w-5"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M16 11V5a1 1 0 00-1-1H5a1 1 0 00-1 1v6m0 0l7 4 7-4M5 11v6a1 1 0 001 1h10a1 1 0 001-1v-6"
            />
          </svg>
          <span class="text-sm">Students</span>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Profile -->
  <div class="border-base-300 flex items-center justify-center border-t p-4">
    <div class="lg:hidden">
      <x-buttons.logout-btn />
    </div>
  </div>
</aside>

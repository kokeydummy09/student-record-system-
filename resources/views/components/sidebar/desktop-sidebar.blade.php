<aside class="bg-base-100 hidden w-56 transform flex-col border-r shadow-md lg:flex">
  <!-- Brand -->
  <div class="border-base-300 flex items-center gap-3 border-b px-6 py-5">
    <div class="bg-primary flex h-10 w-10 items-center justify-center rounded font-bold text-white">S</div>
    <div>
      <div class="text-sm font-semibold">SRS</div>
      <div class="text-muted text-xs">Admin</div>
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
  <div class="border-base-300 border-t p-4">
    <a
      href="#"
      class="hover:bg-base-200 flex items-center gap-3 rounded-lg p-2"
    >
      <div class="h-10 w-10 overflow-hidden rounded-full">
        <img
          src="https://i.pravatar.cc/80"
          alt="avatar"
          class="h-full w-full object-cover"
        >
      </div>
      <div>
        <div class="text-sm font-medium">{{ $user->name ?? 'Guest' }}</div>
        <div class="text-muted text-xs">{{ $user->email ?? 'guest@company.com' }}</div>
      </div>
    </a>
  </div>
</aside>

<header class="bg-base-100 p-4 border-b shadow-sm ">
    <div class="max-w-7xl w-full mx-auto flex items-center justify-between">
        <div class="flex items-center gap-4">
            <a href="#" class="md:hidden font-bold text-lg text-primary">SRS</a>
            <h1 class="text-lg font-semibold">{{ $title ?? 'Dashboard' }}</h1>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="px-4 py-2 border-2 rounded-4xl cursor-pointer hover:bg-black hover:text-white">
                Logout
            </button>
        </form>
    </div>
</header>

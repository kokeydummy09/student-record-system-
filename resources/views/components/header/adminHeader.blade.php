<header class="flex items-center justify-between bg-base-100 p-4 border-b shadow-sm">
    <div class="flex items-center gap-4">
        <a href="#" class="md:hidden font-bold text-lg text-primary">SRS</a>
        <h1 class="text-lg font-semibold">{{ $title ?? 'Dashboard' }}</h1>
    </div>

    <div class="flex items-center gap-4">
        <!-- Avatar dropdown -->
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img src="https://i.pravatar.cc/100" alt="Avatar" />
                </div>
            </label>
            <ul tabindex="0" class="menu dropdown-content mt-3 p-2 shadow-lg bg-base-100 rounded-box w-44">
                <li><a href="#">Profile</a></li>
                <li>
                    <form method="POST" action="">
                        @csrf
                        <button type="submit" class="w-full text-left">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</header>

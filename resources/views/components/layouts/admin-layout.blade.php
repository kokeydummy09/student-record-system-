<!DOCTYPE html>
<html lang="en" data-theme="lofi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>{{ $title ?? 'Admin • SRS' }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{ $head ?? '' }}
</head>

<body class="min-h-screen bg-base-200 text-base-content font-sans">
    <div class="flex h-screen">
        <x-sidebar />
        <div class="flex-1 flex flex-col">
            <x-header.adminHeader :title="$title" />
            <main class="flex-1 overflow-auto p-6">
                <div class="mx-auto w-full max-w-7xl">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

    @stack('scripts')
</body>

</html>

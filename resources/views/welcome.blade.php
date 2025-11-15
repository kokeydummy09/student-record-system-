<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Record System</title>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800 font-sans flex flex-col min-h-screen">
    <!-- Navigation -->
    <header class="bg-white shadow-sm">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold">Student Record System</h1>
            <nav class="space-x-6 hidden md:flex">
                <a href="/login" class="hover:text-blue-600">Login</a>
                <a href="/register" class="hover:text-blue-600">Register</a>
            </nav>
            <button id="mobile-menu-btn" class="md:hidden" aria-controls="mobile-sidebar"
                aria-expanded="false">☰</button>
        </div>
    </header>

    <!-- Mobile sidebar (off-canvas) -->
    <x-overlay />
    <aside id="mobile-sidebar"
        class="fixed inset-y-0 left-0 w-64 bg-white shadow-lg transform -translate-x-full transition-transform z-50">
        <div class="p-4 h-full flex flex-col">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-lg font-semibold">Menu</h2>
                <x-buttons.close-sidebar-btn />
            </div>

            <nav class="flex flex-col gap-3">
                <a href="/login" class="px-3 py-2 rounded hover:bg-gray-100">Login</a>
                <a href="/register" class="px-3 py-2 rounded hover:bg-gray-100">Register</a>
            </nav>

            <div class="mt-auto text-xs text-gray-500">© Student Record System</div>
        </div>
    </aside>

    <!-- Main Content Wrapper -->
    <main class="flex-1">
        <!-- Hero Section -->
        <section class="bg-blue-600 text-white py-20">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-4xl font-semibold mb-4">Manage Students With Ease</h2>
                <p class="text-lg opacity-90 max-w-2xl mx-auto">
                    A clean and simple Student Record System built with Laravel to help you
                    create, view, update, and delete student profiles effortlessly.
                </p>
                <div class="mt-8">
                    <a href="/login"
                        class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg shadow hover:bg-gray-100">View
                        Students</a>
                    <a href="/login"
                        class="px-6 py-3 bg-blue-800 font-semibold rounded-lg shadow hover:bg-blue-900 ml-3">Add
                        Student</a>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-20">
            <div class="max-w-6xl mx-auto px-6">
                <h3 class="text-3xl font-semibold text-center mb-12">
                    Core Features
                </h3>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg">
                        <h4 class="text-xl font-semibold mb-2">Create Students</h4>
                        <p class="text-gray-600">
                            Add new students with full validation including Student ID and Email
                            uniqueness.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg">
                        <h4 class="text-xl font-semibold mb-2">View Records</h4>
                        <p class="text-gray-600">
                            Browse all students in a clean list view and access full details.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg">
                        <h4 class="text-xl font-semibold mb-2">Update & Edit</h4>
                        <p class="text-gray-600">
                            Modify student information anytime with proper validation.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="{{ asset('js/sidebar.js') }}"></script>

</body>

</html>

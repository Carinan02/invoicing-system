<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Invoicing System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-xl mx-auto p-8 bg-white rounded-2xl shadow-lg text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome to Invoicing System</h1>
        <p class="text-gray-600 mb-6">
            Manage your invoices, clients, and payments easily with our secure, fast, and modern invoicing system.
        </p>

        @if (Route::has('login'))
            <div class="flex justify-center space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                        Go to Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="bg-gray-200 text-gray-800 px-4 py-2 rounded-lg hover:bg-gray-300 transition">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="mt-8 text-gray-500 text-sm">
            &copy; {{ date('Y') }} Invoicing System. All rights reserved.
        </div>
    </div>
</body>

</html>

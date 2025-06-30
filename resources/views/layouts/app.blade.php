<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoicing System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md">
            <div class="p-4 text-xl font-bold border-b">Invoicing</div>
            <nav class="p-4">
                <ul class="space-y-2">
                    <li><a href="{{ url('/dashboard') }}"
                            class="block px-3 py-2 rounded hover:bg-gray-200">Dashboard</a></li>
                    <li><a href="{{ url('/rooms') }}" class="block px-3 py-2 rounded hover:bg-gray-200">Rooms</a>
                    </li>
                    <li><a href="{{ url('/clients') }}" class="block px-3 py-2 rounded hover:bg-gray-200">Clients</a>
                    </li>
                    <li><a href="{{ url('/invoices') }}" class="block px-3 py-2 rounded hover:bg-gray-200">Invoices</a>
                    </li>
                    <li><a href="{{ url('/payments') }}" class="block px-3 py-2 rounded hover:bg-gray-200">Payments</a>
                    </li>
                    <li><a href="{{ url('/reports') }}" class="block px-3 py-2 rounded hover:bg-gray-200">Reports</a>
                    </li>
                    <li><a href="{{ url('/settings') }}" class="block px-3 py-2 rounded hover:bg-gray-200">Settings</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-3 py-2 rounded hover:bg-gray-200">
                                Log Out
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            @yield('content')
        </div>
    </div>

</body>

</html>

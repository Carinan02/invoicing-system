@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Total Revenue -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="text-gray-600 text-sm">Total Revenue</div>
            <div class="text-2xl font-semibold text-green-600">₱150,000</div>
        </div>

        <!-- Unpaid Invoices -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="text-gray-600 text-sm">Unpaid Invoices</div>
            <div class="text-2xl font-semibold text-red-600">₱25,000</div>
        </div>

        <!-- Total Clients -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="text-gray-600 text-sm">Total Clients</div>
            <div class="text-2xl font-semibold">23</div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Recent Activity</h2>
        <ul class="space-y-2 text-sm text-gray-700">
            <li>🧾 Invoice #INV0013 sent to ABC Corp</li>
            <li>💰 Payment received from XYZ Ltd.</li>
            <li>👤 New client added: Jomar Dela Cruz</li>
        </ul>
    </div>
@endsection

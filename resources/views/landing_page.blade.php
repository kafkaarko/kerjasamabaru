@extends('templates.app')
@section('content')
<section class="bg-indigo-700 text-white text-center py-16">
    <h1 class="text-4xl font-bold mb-4">Shoes</h1>
    <p class="text-xl mb-8">Manage and track your warehouse inventory with ease.</p>
    <a href="#  " class="bg-white text-indigo-700 px-6 py-3 rounded-lg shadow-lg hover:bg-indigo-100">Warehouse</a>
</section>

<!-- Features Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-indigo-600 mb-10">Features</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold text-indigo-600 mb-4">Track Inventory</h3>
                <p class="text-gray-700 mb-4">Easily monitor stock levels across multiple warehouses and categories.</p>
                <a href="#" class="text-indigo-600 hover:text-indigo-800">Learn More</a>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold text-indigo-600 mb-4">Warehouse Management</h3>
                <p class="text-gray-700 mb-4">Manage multiple warehouses with real-time stock updates and advanced filtering options.</p>
                <a href="#" class="text-indigo-600 hover:text-indigo-800">Learn More</a>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold text-indigo-600 mb-4">User Roles</h3>
                <p class="text-gray-700 mb-4">Assign and manage roles with different permissions to your team members.</p>
                <a href="#" class="text-indigo-600 hover:text-indigo-800">Learn More</a>
            </div>
        </div>
    </div>
</section>


@endsection
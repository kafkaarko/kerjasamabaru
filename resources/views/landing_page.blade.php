@extends('templates.app')
@section('content')
<section class="bg-indigo-700 text-white  justify-center flex items-center text-center py-16 grid-cols-2 gap-5" >
    @foreach ($barang as $item)
        
    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <p>{{ Auth::user()->name }}</p>
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $item->name }} </h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">{{ $item->type }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">{{ $item->category }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">{{ $item->size }}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400">{{ $item->color }}</p>
    </a>
    @endforeach
        
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
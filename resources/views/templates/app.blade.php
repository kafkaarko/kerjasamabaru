<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Cibtira</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.6/dist/flowbite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.6/dist/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-blue-800 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center text-white">
            <div class="text-xl font-semibold">
                ⚙ PT Cibtira ⚙
            </div>
            <div class="flex space-x-4">
                
                
                
                <a href="{{ route('landing_page') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded">Home</a>
                
                <a href="{{ route('kelola_akun.data') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded">Kelola Akun</a>
                <a href="{{ route('barang.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded">Kelola Barang</a>
                <a href="{{ route('gudang.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded">Kelola Gudang</a>
                
                <a href="{{ route('logout') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded">Logout</a>

            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="p-6 bg-gray-100 min-h-screen">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-indigo-600 text-white py-8">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p>&copy; 2025 PT Cibedug 3 Sejatehra. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

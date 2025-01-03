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
<body class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="w-64 bg-blue-800 text-white flex flex-col">
        <div class="p-4 text-center text-xl font-semibold border-b border-blue-700">
            ⚙ PT Cibtira ⚙
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-gray-300 hover:bg-blue-700 hover:text-white rounded">Home</a>
            <a href="{{ route('kelola_akun.data') }}" class="block px-4 py-2 text-gray-300 hover:bg-blue-700 hover:text-white rounded">Kelola Akun</a>
            <a href="{{ route('barang.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-blue-700 hover:text-white rounded">Kelola Barang</a>
            <a href="{{ route('gudang.index') }}" class="block px-4 py-2 text-gray-300 hover:bg-blue-700 hover:text-white rounded">Kelola Gudang</a>
            <a href="{{ route('logout') }}" class="block px-4 py-2 text-gray-300 hover:bg-blue-700 hover:text-white rounded">Logout</a>
        </nav>
        <footer class="p-4 text-center text-xs border-t border-blue-700">
            &copy; 2025 PT Cibedug 3 Sejatehra
        </footer>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        @yield('content')
    </div>
</body>
</html>

@extends('templates.appp')

@section('content')

<div class="container flex flex-col md:flex-row items-center justify-center px-6 py-8 mx-auto space-y-6 md:space-y-0 md:space-x-6">
    <div class="text-center md:text-left max-w-lg">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">PT Cibedug 3 Sejahtera</h1>
        <p class="text-gray-700 dark:text-gray-400 mb-6">Selamat Datang di PT kami, silahkan login terlebih dahulu!
            Website ini dirancang untuk mendukung kebutuhan dalam mengelola Sepatu secara Sistematis dan Efisien 
        </p>
        <a href="{{ route('login') }}" class="px-5 py-2.5 text-black bg-blue-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm">Login</a>
    </div>
</div>

@endsection

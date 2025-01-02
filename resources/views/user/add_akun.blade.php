@extends('templates.app')

@section('content')
    <form action="{{ route('kelola_akun.tambah.proses') }}" method="POST" class="max-w-md mx-auto p-5 bg-white rounded-lg shadow">
        @csrf
        @if ($errors->any())
            <div class="mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (Session::get('success'))
            <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="mb-4">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-4">
            <label for="role" class="block mb-2 text-sm font-medium text-gray-900">Tipe Pengguna:</label>
            <select id="role" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                <option value="" disabled hidden {{ old('role') ? '' : 'selected' }}>Pilih</option>
                <option value="Admin" {{ old('role') == 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="User" {{ old('role') == 'User' ? 'selected' : '' }}>User</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password:</label>
            <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Kirim</button>
    </form>
@endsection

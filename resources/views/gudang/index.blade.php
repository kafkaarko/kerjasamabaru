@extends('templates.app')

@section('content')
<div class="relative overflow-x-auto">
    <a href="{{ route('gudang.create') }}" class="text-black hover:bg-gradient-to-br focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">+</a>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Perusahaan
                </th>
                <th scope="col" class="px-6 py-3">
                    Stock
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Barang
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gudang as $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $item->name }}
                </th>
                <td class="px-6 py-4">
                    {{ $item->stock }}
                </td>
                <td class="px-6 py-4">
                    <!-- Access the barang name through the barang relation -->
                    {{ $item->barang->name ?? 'N/A' }} <!-- Use "N/A" in case the barang relation is null -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

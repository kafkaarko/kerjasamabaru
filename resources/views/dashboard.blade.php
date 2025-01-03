@extends('templates.app')

@section('content')
<section class="bg-indigo-700 text-white flex flex-col items-center py-16 min-h-screen">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-7xl px-4">
        @foreach ($barang as $item)
            @php
                $gudangByBarang = $gudang->get($item->id) ?? []; // Data gudang sesuai barang_id
            @endphp
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">
                <div class="p-6">
                    <p class="text-indigo-500 font-semibold">{{ Auth::user()->name }}</p>
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">{{ $item->name }}</h5>
                    <p class="text-sm text-gray-700">Type: {{ $item->type }}</p>
                    <p class="text-sm text-gray-700">Category: {{ $item->category }}</p>
                    <p class="text-sm text-gray-700">Size: {{ $item->size }}</p>
                    <p class="text-sm text-gray-700">Color: {{ $item->color }}</p>
                    
                    <!-- Stock Selection -->
                    <div class="mt-4">
                        <label for="stock-{{ $item->id }}" class="block text-gray-700 text-sm font-medium">Select Stock</label>
                        <select name="stock[{{ $item->id }}]" id="stock-{{ $item->id }}" class="w-full px-3 py-2 mt-1 bg-gray-50 border border-gray-300 text-gray-900 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                            @foreach ($gudangByBarang as $gudangItem)
                                <option value="{{ $gudangItem->id }}">
                                    {{ $gudangItem->name }} - Stock: {{ $gudangItem->stock }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection

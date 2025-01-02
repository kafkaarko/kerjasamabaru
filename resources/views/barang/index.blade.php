@extends('templates.app')

@section('content')
    

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    <a href="{{ route('barang.create') }}" class="text-black hover:bg-gradient-to-br focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">+</a>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama Sepatu
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Type
                </th>
                <th scope="col" class="px-6 py-3">
                    Size
                </th>
                <th scope="col" class="px-6 py-3">
                    Stock Barang dari Pabrik
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $item)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $item->name }}
                </th>
                <td class="px-6 py-4">
                    {{ $item->color }}
                </td>
                <td class="px-6 py-4">
                    {{ $item->category }}
                </td>
                <td class="px-6 py-4">
                    {{ $item->type }}
                </td>
                <td class="px-6 py-4">
                    {{ $item->size }}
                </td>

                <!-- Dropdown for selecting the stock of the pabrik -->
                <td class="px-6 py-4">
                    <select name="stock[{{ $item->id }}]" id="stock-{{ $item->id }}">
                        @foreach ($gudang as $gudangItem)
                            <option value="{{ $gudangItem->id }}" {{ $gudangItem->id == $item->pabrik_id ? 'selected' : '' }}>
                                {{ $gudangItem->name }} - Stock: {{ $gudangItem->stock }}
                            </option>
                        @endforeach
                    </select>
                </td>

                <td class="px-6 py-4">
                    <a href="{{ route('barang.edit', $item->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('barang.destroy', $item['id']) }}" method="post" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

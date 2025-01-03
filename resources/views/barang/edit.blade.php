@extends('templates.app')

@section('content')
<form class="max-w-sm mx-auto" action="{{ route('barang.update',$barang->id) }}" method="post">
    @csrf
    @method('PATCH')
    @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
            
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Sepatu</label>
        <div class="flex">
          <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
            </svg>
          </span>
          <input type="text" id="name" name="name" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $barang['name'] }}" >
        </div>


    <label for="color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color</label>
    <select id="color" name="color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option selected>Pilih warna</option>
      <option value="Black" {{ $barang['color'] == 'Black' ? 'selected' : '' }}>Black</option>
      <option value="White" {{ $barang['color'] == 'White' ? 'selected' : '' }}>White</option>
      <option value="Blue" {{ $barang['color'] == 'Blue' ? 'selected' : '' }}>Blue</option>
      <option value="Brown" {{ $barang['color'] == 'Brown' ? 'selected' : '' }}>Brown</option>
    </select>
    
    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
    <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option selected>Pilih Category</option>
      <option value="Olahraga"{{ $barang['category'] == 'Olahraga' ? 'selected' : '' }}>Olah raga</option>
        <option value="Santai"{{ $barang['category'] == 'Santai' ? 'selected' : '' }}>Santai</option>
        </select>
    
        

        <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
        <select id="type" name="type"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected>Pilih Category</option>
          <option value="Running"{{ $barang['type'] == 'Running' ? 'selected' : '' }}>Running</option>
          <option value="Futsal"{{ $barang['type'] == 'Futsal' ? 'selected' : '' }}>Futsal</option>
          <option value="Sneakers"{{ $barang['type'] == 'Sneakers' ? 'selected' : '' }}>Sneaker</option>
          <option value="Canvas" {{ $barang['type'] == 'Canvas' ? 'selected' : '' }}>Canvas</option>
        </select>
        
        <label for="size" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size Sepatu</label>
        <div class="flex">
          <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
            </svg>
          </span>
          <input type="number" id="size" name="size" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $barang->size }}" >
        </div>
        
        
        <button type="submit" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 mt-5">Edit</button>
      </form>
      
      @endsection
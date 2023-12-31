@extends('layouts.app')
@section('title', 'Categories')

@section('content')
    <h1>
    @section('heading', 'Category')
</h1>

<div class="mt-3">
    <a class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
        href="{{ route('form') }}">Create Product</a>

    <a class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
        href="{{ route('product-list') }}">Product List</a>
</div>

<table class="table-fixed w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-4">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">Sr no.</th>
            <th scope="col" class="px-6 py-3">Name</th>
            <th scope="col" class="px-6 py-3">Product</th>
            <th scope="col" class="px-6 py-3">Product_Count</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($categories as $index => $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">{{ $index + 1 }}</td>
                <td class="px-6 py-4">{{ $item->name }}</td>
                <td class="px-6 py-4">
                    @foreach ($item->products as $product)
                        {{ $product->name }}
                    @endforeach
                </td>
                <td class="px-6 py-4">{{ count($item->products) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

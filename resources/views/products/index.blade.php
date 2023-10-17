@extends('layouts.app')
@section('title', 'Products')

@section('content')

    <h1>
    @section('heading', 'Products')
</h1>

<div class="mt-3">
    <a class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
        href="{{ route('form') }}">Create Product</a>
    <a class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
        href="{{ route('home') }}">Display Categories</a>
    <form action="" class="mt-5">
        <input type="search"
            class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
            placeholder="Search Products" name="search" value="{{ request('search') }}">
    </form>
</div>

<table class="table-fixed w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-4">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">Sr no.</th>
            <th scope="col" class="px-6 py-3">Category Name</th>
            <th scope="col" class="px-6 py-3">Product</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $index => $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">{{ $index + $products->firstItem() }}</td>
                <td class="px-6 py-4">{{ $item->category->name }}</td>
                <td class="px-6 py-4">{{ $item->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="my-5">
    {{ $products->links() }}
</div>
@endsection

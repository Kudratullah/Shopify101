@extends('layouts.default')

@section('content')
    <div class="relative sm:flex sm:justify-center sm:items-start min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="w-full mx-auto p-6 lg:p-8">
            <div class="w-full">
                <div class="flex flex-center">
                    <div class="w-full p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none">
                        <div class="flex items-center justify-between mt-4 mb-3">
                            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Products</h2>
                            @if( $collection )
                                <div class=" ml-auto text-gray-900 dark:text-white">
                                    Viewing <span class="font-bold">{{ $collection->name }}</span> collection
                                    (<a class="text-blue-500 hover:text-blue-700" href="{{ URL::tokenRoute('products.index') }}">View All</a>)
                                </div>
                            @endif
                            <a href="{{ URL::tokenRoute('products.add', [ $collection? $collection->id : 0 ]) }}" class="bg-blue-500 text-white hover:bg-blue-700 hover:text-gray-300 focus:outline-none focus:ring focus:border-blue-300 ml-auto py-2 px-4 rounded inline-flex items-center">
                                <svg class="fill-current w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
                                </svg>
                                Add new
                            </a>
                        </div>
                        <table class="min-w-full text-gray-900 dark:text-white border border-gray-500 dark:border-gray-900 rounded-md overflow-hidden">
                            <thead class="bg-gray-200 dark:bg-gray-900/60">
                            <tr>
                                <th class="py-2 px-4 border-b border-gray-500 dark:border-gray-900">Name</th>
                                <th class="py-2 px-4 border-b border-gray-500 dark:border-gray-900">Collection</th>
                                <th class="py-2 px-4 border-b border-gray-500 dark:border-gray-900">Description</th>
                                <th class="py-2 px-4 border-b border-gray-500 dark:border-gray-900">Status</th>
                                <th class="py-2 px-4 border-b border-gray-500 dark:border-gray-900">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ( $products  as $product )
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-500 dark:border-gray-900">{{ $product->name }}</td>
                                    <td class="py-2 px-4 border-b border-gray-500 dark:border-gray-900">{{ $product->collection->name }}</td>
                                    <td class="py-2 px-4 border-b border-gray-500 dark:border-gray-900">{{ $product->description }}</td>
                                    <td class="py-2 px-4 text-center border-b border-gray-500 dark:border-gray-900">
                                        <span class="rounded-2xl px-2 font-light text-sm border {{($product->status? 'border-green-300 bg-green-200 text-green-600' : 'border-red-300 bg-red-200 text-red-600')}}">{{ ( $product->status ? 'Active' : 'Inactive' ) }}</span>
                                    </td>
                                    <td class="py-2 px-4 border-b border-gray-500 dark:border-gray-900">
                                        <a href="{{ URL::tokenRoute('products.edit', [$product->id] ) }}" class="text-blue-500 hover:text-blue-700 focus:outline-none focus:ring focus:border-blue-300 px-2">Edit</a>
                                        <a href="{{ URL::tokenRoute('products.delete', [$product->id] ) }}" class="text-red-500 hover:text-red-700 focus:outline-none focus:ring focus:border-red-300 px-2">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="py-2 px-4 text-center border-b border-gray-500 dark:border-gray-900">
                                        Nothing found.
                                        <a class="text-blue-500 hover:text-blue-700" href="{{ URL::tokenRoute('products.add', [ $collection ? $collection->id : 0 ] ) }}">Add new?</a>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

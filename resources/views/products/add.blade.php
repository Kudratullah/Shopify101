@extends('layouts.default')

@section('content')
    <div class="relative sm:flex sm:justify-center sm:items-start min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="w-full max-w-2xl mx-auto p-6 lg:p-8">
            <div class="w-full">
                <div class="flex flex-center">
                    <div class="w-full scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div class="w-full">
                            <div class="flex items-center justify-center mt-4 mb-3">
                                <h2 class="text-xl text-center font-semibold text-gray-900 dark:text-white">Add Product</h2>
                            </div>
                            <form action="{{ route('products.save') }}" method="post">
                                @sessionToken
                                <div class="w-full mb-4">
                                    <label for="name" class="block text-sm font-medium text-gray-600 dark:text-gray-200">Name</label>
                                    <input type="text" id="name" name="name" placeholder="E.g., Widget Pro 5000" value="{{{ old( 'name' ) }}}" class="mt-1 p-2 w-full border rounded-md" required>
                                </div>
                                <div class="w-full mb-4">
                                    <label for="collection" class="block text-sm font-medium text-gray-600 dark:text-gray-200">Name</label>
                                    <select type="text" id="collection" name="collection" class="mt-1 p-2 w-full border rounded-md" required>
                                        <option value="" selected disabled>Select Collection</option>
                                        @foreach( $collections as $collection)
                                        <option value="{{$collection->id}}"{{ ( old( 'collection', $collectionId ) == $collection->id ? ' selected' : '' ) }}>{{$collection->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="w-full mb-4">
                                    <label for="description" class="block text-sm font-medium text-gray-600 dark:text-gray-200">Description</label>
                                    <textarea id="description" name="description" placeholder="Describe the product in detail..." rows="4" class="mt-1 p-2 w-full border rounded-md">{{{ old( 'description' ) }}}</textarea>
                                </div>
                                <div class="flex justify-start flex-row-reverse gap-4">
                                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Save</button>
                                    <div class="flex">
                                        <label for="status" class="inline-flex mr-4 items-center cursor-pointer select-none text-dark dark:text-white">Status</label>
                                        <label for="status" class="inline-flex items-center cursor-pointer select-none text-dark dark:text-white">
                                            <div class="relative">
                                                <input class="peer sr-only" type="checkbox" id="status" name="status" value="1"{{(old( 'status', 1 ) ? ' checked' : '')}}>
                                                <div class="block h-8 rounded-full bg-gray-300 dark:bg-dark-200 w-14"></div>
                                                <div class="absolute flex items-center justify-center w-6 h-6 transition bg-white rounded-full dot dark:bg-dark-600 left-1 top-1 peer-checked:translate-x-full peer-checked:bg-blue-500">
                                                    <span class="hidden active">
                                                        <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z" fill="white" stroke="white" stroke-width="0.4"/></svg>
                                                    </span>
                                                    <span class="text-black dark:text-light inactive">
                                                        <svg class="w-4 h-4 stroke-current" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <a href="{{ URL::tokenRoute('products.index') }}" class="bg-gray-500 text-white py-2 px-4 mr-auto rounded-md hover:bg-gray-600 focus:outline-none focus:ring focus:border-blue-300">Go Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

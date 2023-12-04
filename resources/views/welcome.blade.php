@extends('layouts.default')

@section('content')
    <div class="relative sm:flex sm:justify-center sm:items-start min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="w-full max-w-3xl mx-auto p-6 lg:p-8">
            <div class="w-full">
                <div class="flex flex-center">
                    <div class="w-full scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div class="w-full">
                            <div class="flex items-center justify-center mt-4 mb-3">
                                <h2 class="text-xl text-center font-semibold text-gray-900 dark:text-white">Welcome to Shopify 101</h2>
                            </div>
                            <div class="mt-4 grid grid-cols-2 gap-4">
                                <div class="mt-2 text-gray-500 dark:text-gray-400 text-sm">
                                    <h3><span class="font-semibold">Shop Name:</span> <span class="leading-relaxed">{{ $data['name'] }}</span></h3>
                                </div>
                                <div class="mt-2 text-gray-500 dark:text-gray-400 text-sm">
                                    <h3>Shop Owner: <span class="leading-relaxed">{{ $data['shop_owner'] }}</span></h3>
                                </div>
                                <div class="mt-2 text-gray-500 dark:text-gray-400 text-sm">
                                    <h3>Admin Email: <span class="leading-relaxed">{{ $data['email'] }}</span></h3>
                                </div>
                                <div class="mt-2 text-gray-500 dark:text-gray-400 text-sm">
                                    <h3>Shop Domain: <a href="http://{{{ $data['domain'] }}}" target="_blank" class="leading-relaxed">{{ $data['domain'] }}</a></h3>
                                </div>
                                <div class="mt-2 text-gray-500 dark:text-gray-400 text-sm">
                                    <h3>Shop ID: <span class="leading-relaxed">{{ $data['id'] }}</span></h3>
                                </div>
                                <div class="mt-2 text-gray-500 dark:text-gray-400 text-sm">
                                    <h3>Country/Currency: <span class="leading-relaxed">{{ $data['country_name'] }} ({{ $data['currency']  }})</span></h3>
                                </div>
                                <div class="mt-2 text-gray-500 dark:text-gray-400 text-sm">
                                    <h3>Shop Created: <span class="leading-relaxed">{{ $data['created_at'] }}</span></h3>
                                </div>
                                <div class="mt-2 text-gray-500 dark:text-gray-400 text-sm">
                                    <h3>Last updated: <span class="leading-relaxed">{{ $data['updated_at'] }}</span></h3>
                                </div>
                                <div class="mt-2 text-gray-500 dark:text-gray-400 text-sm">
                                    <h3>Timezone: <span class="leading-relaxed">{{ $data['timezone'] }}</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

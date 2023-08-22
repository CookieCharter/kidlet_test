<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $product->name }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css', 'resources/css/app.js')
</head>

<body class="antialiased">
    @include('layouts.header', ['cart' => $cart])
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class=" mx-3 mt-3 overflow-hidden rounded-xl">
                <img src="https://picsum.photos/seed/{{ $product->id }}/800/600" class="object-cover" alt="">
            </div>
            <div class="flex flex-col justify-between m-4">
                <div>
                    <h3 class="text-md tracking-tight text-slate-900  line-clamp-1">
                        {{ $product->category->name }}
                    </h3>

                    <h1 class="text-3xl tracking-tight text-slate-900 ">{{ $product->name }}</h1>
                    <p class="text-3xl font-bold text-slate-900 mt-5">{{ $product->price }} <span
                            class="text-xl font-semibold text-slate-900">RON</span></p>
                    <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                    <p>
                        {{ $product->description }}
                    </p>

                </div>

                @auth
                    <button
                        class="add-to-cart flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300 disabled:opacity-25"
                        {{ $product->instock == true || Auth::check() ? '' : 'disabled' }} data-id={{ $product->id }}>
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>

                        @if ($product->instock == true)
                            <span class="button-text">Add to cart</span>
                        @else
                            <span class="button-text">Reserved</span>
                        @endif
                    </button>
                @else
                    <a href="{{ route('login') }}"
                        class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300 disabled:opacity-25">
                        <span class="button-text">Login</span>
                    </a>
                @endauth
            </div>

        </div>
    </div>
    </div>

    @stack('scripts')
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    @include('layouts.header', ['cart' => $cart])
    <div class="container mx-auto">
        <div class="flex flex-col items-center">
            <div class="grid gap-x-4 gap-y-4 grid-cols-1 md:grid-cols-3 justify-items-center">
                @foreach ($products as $product)
                    <div
                        class="flex justify-between w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                        <a class=" mx-3 mt-3 flex h-60 overflow-hidden rounded-xl"
                            href="{{ route('product', $product->id) }}">
                            <img src="https://picsum.photos/seed/{{ $product->id }}/300/200" class="object-cover"
                                alt="">
                        </a>
                        <div class="mt-4 px-5">
                            <a href="">
                                <h6 class="text-md tracking-tight text-slate-900  line-clamp-1">
                                    {{ $product->category->name }}
                                </h6>
                            </a>
                            <a href="{{ route('product', $product->id) }}">
                                <h5 class="text-2xl tracking-tight text-slate-900 ">{{ $product->name }}</h5>
                            </a>

                            <div class="mt-2 mb-5 flex items-center justify-between">
                                <p class="text-3xl font-bold text-slate-900">{{ $product->price }} <span
                                        class="text-xl font-semibold text-slate-900">RON</span></p>

                            </div>
                        </div>
                        <div class="mt-4 px-5 pb-5 grid">
                            @auth
                                <button
                                    class="add-to-cart flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300 disabled:opacity-25"
                                    {{ $product->instock == true && Auth::check() ? '' : 'disabled' }}
                                    data-id={{ $product->id }}>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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
                @endforeach

            </div>
        </div>
        <div class="m-4">
            {{ $products->links('pagination::tailwind') }}
        </div>
    </div>

    @stack('scripts')
</body>

</html>

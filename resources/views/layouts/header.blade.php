<header class="bg-white sticky top-0">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    alt="">
            </a>
        </div>

        <div class="hidden lg:flex lg:flex-1 lg:justify-end bg-white">
            <div class="relative">
                <button id="cart-icon" type="button"
                    class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                    aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>

                </button>
                <div
                    class="cart-flyout hidden absolute -right-0 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                    <div class="grid grid-cols-1 p-3">
                        <div class="cart bg-white">

                        </div>
                    </div>
                    <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                    <div class="px-5 pb-5 grid">
                        @auth
                            <p class="text-lg my-3">Total: <span
                                    class="total font-bold">{{ $cart ? $cart->total : '0' }}</span>
                                RON
                            </p>
                            <button href="{{-- {{ route('order.finish') }} --}}"
                                class="place-order flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300 disabled:bg-slate-400">
                                <span class="button-text">Place order</span>
                            </button>
                        @else
                            <div class="grid items-center justify-center">
                                <p>You must log in to order</p>
                                <a href="{{ route('login') }}"
                                    class="rounded-md bg-slate-900 px-5 mt-3 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300 disabled:bg-slate-400">
                                    <span class="button-text">Login</span>
                                </a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        {{-- Mobile --}}
        <div class="flex flex-1 justify-end lg:hidden">
            <div class="relative">
                <button id="cart-icon-mobile" type="button"
                    class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                    aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>

                </button>
                <div
                    class="cart-flyout-mobile hidden absolute -right-0 top-full z-10 mt-3 w-[80vw] overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                    <div class="grid grid-cols-1 p-3">
                        <div class="cart">

                        </div>
                    </div>
                    <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                    <div class="px-5 pb-5 grid">

                        @auth
                            <p class="text-lg my-3">Total: <span
                                    class="total font-bold">{{ $cart ? $cart->total : '0' }}</span>
                                RON
                            </p>
                            <button href="{{-- {{ route('order.finish') }} --}}"
                                class="place-order flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300 disabled:bg-slate-400">
                                <span class="button-text">Place order</span>
                            </button>
                        @else
                            <div class="grid items-center justify-center">
                                <p>You must log in to order</p>
                                <a href="{{ route('login') }}"
                                    class="rounded-md bg-slate-900 px-5 mt-3 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300 disabled:bg-slate-400">
                                    <span class="button-text">Login</span>
                                </a>
                            </div>
                        @endauth
                    </div>
                </div>
                <div
                    class="cart-flyout hidden absolute -right-0 top-full z-10 mt-3 w-1/2 overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">

                </div>

            </div>
        </div>
    </nav>

</header>
@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        getCart()
        $("body").on("click", ".delete-icon", function(event) {
            var productId = $(this).data('id');
            var element = $(this);
            $.ajax({
                url: "{{ route('cart.delete') }}",
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: productId
                },
                complete: function(response) {
                    getCart()
                }
            });
        });

        $('#cart-icon').click(function() {
            $('.cart-flyout').toggleClass('hidden');
        })
        $('#cart-icon-mobile').click(function() {
            $('.cart-flyout-mobile').toggleClass('hidden');
        })

        $('.add-to-cart').click(function() {
            var productId = $(this).data('id');
            var element = $(this);
            $.ajax({
                url: "{{ route('cart.add') }}",
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: productId
                },
                beforeSend: function() {
                    $(element).children('.button-text').html('Please wait...');
                },
                success: function(response) {
                    alert(response.resp)
                },
                complete: function(response) {
                    $(element).children('.button-text').html(response.responseJSON.resp);
                    element.attr('disabled', true);
                    $('.place-order').attr('disabled', false);
                    getCart()
                }
            });
        });

        function getCart() {
            $.ajax({
                url: "{{ route('cart.index') }}",
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                error: function(xhr) {
                    console.log(xhr)
                },
                success: function(response) {
                    $('.cart').html(response.cart)
                    $('.total').html(response.total)
                    if (response.total == 0 || !response.total) {
                        $('.place-order').attr('disabled', true);
                    }
                }
            });
        }
    </script>
@endpush

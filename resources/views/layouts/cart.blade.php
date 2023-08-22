@if (count($cart->cartProducts))
    @foreach ($cart->cartProducts as $product)
        <div class="grid grid-cols-4 my-2 gap-2 items-center">
            <div>
                <a class="flex overflow-hidden rounded-xl" href="{{ route('product', $product->id) }}">
                    <img src="https://picsum.photos/seed/{{ $product->id }}/300/200" class="object-cover" alt="">
                </a>
            </div>
            <div class="col-span-2">
                <h5 class="text-lg tracking-tight leading-tight text-slate-900">
                    {{ $product->name }}
                </h5>
                <p class="text-sm font-bold text-slate-900">{{ $product->price }} <span
                        class=" font-semibold text-slate-900">RON</span></p>
            </div>
            <div class="flex justify-center">
                <button class="delete-icon" data-id={{ $product->id }}>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                </button>
            </div>
        </div>
    @endforeach
@else
    <div class="flex items-center justify-center">
        <p>Cart is empty</p>
    </div>
@endif

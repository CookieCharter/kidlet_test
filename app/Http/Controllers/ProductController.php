<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(6);

        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $cart = Cart::with('cartProducts')->where('user_id', $user_id)->first();
        } else {
            $cart = [];
        }
        return view('home', compact('products', 'cart'));
    }
}

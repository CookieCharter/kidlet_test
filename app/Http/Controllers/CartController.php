<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id', $user_id)->first();
        if ($cart) {
            $cart_html = view('layouts.cart', compact('cart'))->render();
            return response()->json(['cart' => $cart_html, 'total' => $cart->total]);
        } else {
            return response()->json(['resp' => 'Empty cart']);
        }
    }
    public function addToCart(Request $request)
    {
        $productId = (int) $request->input('product_id');
        $product = Product::find($productId);

        if ($product->instock != true) {
            return response()->json(['resp' => 'Reserved']);
        } else {
            $product->instock = false;
            $product->save();
            $user_id = Auth::user()->id;
            $cart = Cart::where('user_id', $user_id)->first();
            if ($cart) {
                $cart_item = new CartItem();
                $cart_item->product_id = $productId;
                $cart_item->cart_id = $cart->id;
                $cart_item->save();
                $cart->total = $cart->total();
                $cart->save();
            } else {
                $cart = new Cart();
                $cart->user_id = $user_id;
                $cart->save();
                $cart_item = new CartItem();
                $cart_item->product_id = $productId;
                $cart_item->cart_id = $cart->id;
                $cart_item->save();
                $cart->total = $cart->total();
                $cart->save();
            }
            return response()->json(['resp' => 'Added to cart']);
        }
    }

    public function deleteFromCart(Request $request)
    {
        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id', $user_id)->first();

        $productId = (int) $request->input('product_id');
        $item = CartItem::where('cart_id', $cart->id)->where('product_id', $productId)->first();
        $item->delete();

        $product = Product::find($productId);
        $product->instock = true;
        $product->save();
        $cart->total = $cart->total();
        $cart->save();
        return response(['resp' => 'Deleted']);
    }

    public function placeOrder()
    {
        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id', $user_id)->first();
        CartItem::where('cart_id', $cart->id)->delete();
        $cart->delete();
        redirect()->route('index');
    }
}

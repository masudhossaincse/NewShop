<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // return $request->all();
        $product = Product::find($request->id);

        Cart::add([
            'id' => $request->id,
            'name' => $product->productName,
            'price' => $product->productPrice,
            'qty' => $request->qty,
        ]);

        return redirect('/add-to-cart');
    }
}

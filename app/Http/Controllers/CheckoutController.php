<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function checkoutIndex (Request $request) {
        $products = $request->session()->get('cart');

        $getProducts = [];
        if ($products == null)  return redirect()->back();
        else {
            foreach ($products as $product => $id) {
                $pr = Product::findOrFail($id['id']);

                $pr['price'] = $id['price'];
                $getProducts[$product] = $pr;
            }
            return view('checkout.checkoutOrder', compact('getProducts'));
        }
    }
    public function checkoutOrder (Request $request) {
        dd($request->all());
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cart;
use Auth;

class ShoppingController extends Controller
{

    public function index_cart(){
        return view('users.cart.index_cart');
    }

    public function add_cart(Request $req){
         $req->validate([
            'quantity'   => 'required',
            'tax'        => 'required',
            'product_id' => 'required',
        ]);
        dd($req->all());
        $cart = Cart::create([
            'quantity'  => $req->quantity,
            // 'tax'       => $req->tax,
            'product_id'=> $req->product_id,
            'user_id'   => Auth::user()->id,
        ]);
        return 'good';
    }
}

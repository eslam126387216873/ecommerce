<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

class IndexController extends Controller
{
    public function index(){
        $products = Product::where('approved',true)->where('featured',true)->get();
        $categories = Category::get();
        return view('users.products.index',compact('categories','products'));
    }

    public function details_prodcut($slug){
        $products = Product::where('slug',$slug)->first();
        $products2 = Product::where('approved',true)->where('featured',true)->get();
        return view('users.products.details_prodcut',compact('products2','products'));
    }

    public function all_products(){
        $products = Product::orderBy('id','desc')->paginate(5);
        return view('users.products.all_products',compact('products'));
    }
}
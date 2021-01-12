<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;
use App\Models\Color;
use App\Models\Brand;

class CategoryController extends Controller
{
   
    public function category($id){
        $categories = Category::findOrFail($id);
        $products   = Product::where('category_id',$categories->id)->where('approved',TRUE)->get();
        $colors     = Color::get(); 
        $brands     = Brand::get();
        return view('users.categories.category',compact('brands','categories','products','colors'));
    }

    public function low_price($id){
        $categories = Category::findOrFail($id);
        $products   = Product::where('category_id',$categories->id)->where('approved',TRUE)->orderBy('price','asc')->get();
        $brands     = Brand::get();
        return view('users.categories.low_price',compact('brands','categories','products'));
    }

    public function high_price($id){
        $categories = Category::findOrFail($id);
        $products   = Product::where('category_id',$categories->id)->where('approved',TRUE)->orderBy('price','desc')->get();
        $brands     = Brand::get();
        return view('users.categories.high_price',compact('brands','categories','products'));
    }

    public function brands($id){
        $categories = Category::findOrFail($id);
        $brands     = Brand::findOrFail($id);
        $products   = Product::where('approved',TRUE)->
        where('brand_id',$brands->id)->get();
        return view('users.categories.brands',compact('brands','categories','products'));
    }
}

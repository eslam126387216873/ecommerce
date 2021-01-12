<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supcategory;
use App\Models\Image;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Size;
use App\Http\Requests\ProductRequest;
use App\Traits\ImageTraits;
use Auth;



class ProductController extends Controller
{
    use ImageTraits;

    public function index_product(){
        $products = Product::orderBy('id','desc')->paginate(5);
        $brands = Brand::get();
        if(isset($_GET['search'])){
            $products = Product::orderBy('id','desc')->where('id','like','%'.$_GET['search'].'%')->paginate(5);      
        }
        return view('admins.products.index_product',compact('products','brands'));
    }

    public function create_product(){
        $categories = Category::get();
        $supcategories = Supcategory::get();
        $colors = Color::get();
        $sizes = Size::get();
        $brands = Brand::get();
        return view('admins.products.create_product',compact('colors','sizes','supcategories','brands','categories'));
    }

    public function create_product_store(ProductRequest $req){
        $products = Product::create([
            'name'        => $req->name,
            'content'     => $req->content,
            'price'       => $req->price,
            'descount'    => $req->descount,
            'slug'        => $req->name,
            'approved'    => True,
            'quantity'    => $req->quantity,
            'user_id'     => Auth::user()->id,
            'category_id' => $req->category_id,
            'brand_id'    => $req->brand_id,

        ]);
        // dd($req->$products);
        foreach($req->file('image') as $image){
            $image = $this->ImageTraits($image,'image_product');
            $images = Image::create([
                'image'      => $image,
                'product_id' => $products->id
            ]);
        }
        $products->colors()->sync($req->color);
        $products->sizes()->sync($req->size);

        return redirect()->route('index_product')->with('message',Trans('site.create_product_message'));
    }

    public function update_product($id){
        $products = Product::findOrFail($id);
        $categories = Category::get();
        $supcategories = Supcategory::get();
        $colors = Color::get();
        $sizes = Size::get();
        $brands = Brand::get();
        return view('admins.products.update_product',compact('products','colors','sizes','supcategories','brands','categories'));
    }

    public function update_product_store(ProductRequest $req, $id){
        $products = Product::findOrFail($id);
        $products->update([
            'name'        => $req->name,
            'content'     => $req->content,
            'price'       => $req->price,
            'descount'    => $req->descount,
            'slug'        => $req->name,
            'quantity'    => $req->quantity,
            'user_id'     => Auth::user()->id,
            'category_id' => $req->category_id,
            'brand_id'    => $req->brand_id,

        ]);
        if($req->file('image')){
            $products->images()->delete();
            foreach($req->file('image') as $image){
                $file_name = $this->ImageTraits($image,'image_product');
                Image::create([
                    'image'      => $file_name,
                    'product_id' => $products->id
                ]);
            }
        }
        $products->colors()->sync($req->color);
        $products->sizes()->sync($req->size);

        return redirect()->route('index_product')->with('message',Trans('site.update_product_message'));
    }

    public function delete_product($id){
        $products = Product::findOrFail($id)->delete();
        return redirect()->back()->with('message',Trans('site.delete_product_message'));
    }

    public function show_product($slug){
        $products = Product::where('slug',$slug)->first();
        return view('admins.products.show_product',compact('products'));
    }

    public function approved($id){
        Product::findOrFail($id)->update(['approved'=>True]);
        return redirect()->back();
    }

    public function cansel_product($id){
        Product::findOrFail($id)->update(['approved'=>false]);
        return redirect()->back();
    }

    public function featured($id){
        $products = Product::findOrFail($id)->update(['featured'=>True]);
        return redirect()->back();
    }

    public function not_featured($id){
        $products = Product::findOrFail($id)->update(['featured'=>False]);
        return redirect()->back();
    }
}

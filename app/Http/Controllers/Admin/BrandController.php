<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Brand;
use App\Http\Requests\BrandRequest;

class BrandController extends Controller
{
    
    public function index_brand(){
        $brands = Brand::get();
        if(isset($_GET['search'])){
            $brands = Brand::orderBy('id','desc')->where('name','like','%'.$_GET['search'].'%')->paginate(10);      
        }
        return view('admins.brands.index_brand',compact('brands'));
    }

    public function create_brand(){
        return view('admins.brands.create_brand');
    }

    public function create_brand_store(BrandRequest $req){
        $brands = Brand::create([
            'name' => $req->name,
        ]);
        return redirect()->route('index_brand')->with('message',Trans('site.create_brand_message'));
    }

    public function update_brand($id){
        $brands = Brand::findOrFail($id);
        return view('admins.brands.update_brand',compact('brands'));
    }

    public function update_brand_store(BrandRequest $req, $id){
        $brands = Brand::findOrFail($id);
        $brands->update([
            'name' => $req->name,
        ]);
        return redirect()->route('index_brand')->with('message',Trans('site.update_brand_message'));
    }

    public function delete_brand($id){
        $brands = Brand::findOrFail($id)->delete();
        return redirect()->back()->with('message',Trans('site.delete_brand_message'));
    }
}

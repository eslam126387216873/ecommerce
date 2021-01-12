<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Supcategory;
use App\Traits\ImageTraits;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryDetailsRequest;


class CategoryController extends Controller
{
    use ImageTraits;

    ##### Genral Category

    public function index_category(){
        $categories = Category::orderBy('id','desc')->paginate(10);
        return view('admins.categories.index_category',compact('categories'));
    }

    public function create_category(){
        return view('admins.categories.create_category');
    }

    public function create_category_store(CategoryRequest $req){
        $file_name = $this->ImageTraits($req->image,'image_categories');
        $categories = Category::create([
            'name' => $req->name,
            'image' => $file_name
        ]);
        return redirect()->route('index_category')->with('message',Trans('site.create_category_message'));
    }

    public function update_category($id){
        $categories = Category::findOrFail($id);
        return view('admins.categories.update_category',compact('categories'));
    }

    public function update_category_store(CategoryRequest $req, $id){
        $categories = Category::findOrFail($id);
        $file_name = $this->ImageTraits($req->image,'image_categories');
        $categories->update([
            'name' => $req->name,
            'image' => $file_name
        ]);
        return redirect()->route('index_category')->with('message',Trans('site.update_category_message'));
    }
    
    public function delete_category($id){
        $categories = Category::findOrFail($id)->delete();
        return redirect()->back()->with('message',Trans('site.delete_category_message'));
    }

    #Details Category

    public function detalis_category(){
        $subcategory = Supcategory::get();
        $categories = Category::get();
        return view('admins.categories.details_category',compact('subcategory','categories'));
    }

    public function create_detalis_category(){
        $subcategory = Supcategory::get();
        $categories = Category::get();
        return view('admins.categories.create_details_category',compact('subcategory','categories'));
    }

    public function create_detalis_category_store(CategoryDetailsRequest $req){
        $subcategory = Supcategory::create([
            'name' => $req->name,
            'category_id' => $req->category_id
        ]);
        return redirect()->route('detalis_category')->with('message',Trans('site.create_details_category_message'));
    }

    public function update_details_category($id){
        $subcategory = Supcategory::findOrFail($id);
        $categories = Category::get();
        return view('admins.categories.update_details_category',compact('categories','subcategory'));
    }

    public function update_detalis_category_store(CategoryDetailsRequest $req, $id){
        $subcategory = Supcategory::findOrFail($id);
        $subcategory->update([
            'name' => $req->name,
            'category_id' => $req->category_id
        ]);
        return redirect()->route('detalis_category')->with('message',Trans('site.update_details_category_message'));
    }

    public function delete_details_category($id){
        $subcategory = Supcategory::findOrFail($id)->delete();
        return redirect()->back()->with('message',Trans('site.delete_details_category_message'));
    }


}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Size;
use App\Http\Requests\SizeRequest;

class SizeController extends Controller
{
   public function index_size(){
       $sizes = Size::get();
       return view('admins.sizes.index_size',compact('sizes'));
   }

   public function create_size(){
       return view('admins.sizes.create_size');
   }
   
   public function create_size_store(SizeRequest $req){
       Size::create([
        'size' => $req->size,
       ]);
       return redirect()->route('index_size')->with('message',Trans('site.create_size_message'));
   }

   public function update_size($id){
       $sizes = Size::findOrFail($id);
       return view('admins.sizes.update_size',compact('sizes'));
   }

   public function update_size_store(SizeRequest $req, $id){
    $sizes = Size::findOrFail($id);
    $sizes->update([
     'size' => $req->size,
    ]);
    return redirect()->route('index_size')->with('message',Trans('site.update_size_message'));
    }

    public function delete_size($id){
        $sizes = Size::findOrFail($id)->delete();
        return redirect()->back()->with('message',Trans('site.delete_size_message'));
    }
}

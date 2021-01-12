<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Color;
use App\Http\Requests\ColorRequest;

class ColorController extends Controller
{
    public function index_color(){
        $colors = Color::get();
        return view('admins.colors.index_color',compact('colors'));
    }

    public function create_color(){
        return view('admins.colors.create_color');
    }

    public function create_color_store(ColorRequest $req){
        $colors = Color::create([
            'color' => $req->color,
        ]);
        return redirect()->route('index_color')->with('message',Trans('site.create_color_message'));
    }

    public function update_color($id){
        $colors = Color::findOrFail($id);
        return view('admins.colors.update_color',compact('colors'));
    }

    public function update_color_store(ColorRequest $req, $id){
        $colors = Color::findOrFail($id);
        $colors->update([
            'color' => $req->color,
        ]);
        return redirect()->route('index_color')->with('message',Trans('site.update_color_message'));
    }

    public function delete_color($id){
        $colors = Color::findOrFail($id)->delete();
        return redirect()->back()->with('message',Trans('site.delete_color_message'));
    }
}

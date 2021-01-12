<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use Auth;

class OrderController extends Controller
{
    public function index_orders_vendor(){
        $orders = Order::orderBy('id','desc')->where('user_id',Auth::user()->id)->paginate(5);
        return view('users.dashboard.order_vendor',compact('orders'));
    }

    public function show_orders_vendor($id){
        $orders = Order::findOrFail($id);
        return view('users.dashboard.show_order_vendor',compact('orders'));
    }

    public function delete_orders($id){
        $orders = Order::findOrFail($id)->delete();

        return redirect()->back()->with('message',Trans('site.delete_order_message'));
    }

    public function cansel($id){
        $orders = Order::FindOrFail($id)->update(['status'=>'cansel']);
        return redirect()->back();
    }

    public function done($id){
        $orders = Order::FindOrFail($id)->update(['status'=>'done']);
        return redirect()->back();
    }

    public function waite($id){
        $orders = Order::FindOrFail($id)->update(['status'=>'waite']);
        return redirect()->back();
    }
}

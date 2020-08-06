<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
class OrderController extends Controller
{
    public function index() {
        $order = Order::orderBy('id','desc')->get();

        return view('admin.order',['data' => $order]);
    }

    public function show($id) {
        $order = Order::where('id',$id)->first();
        return view('admin.order_show',['order'=>$order]);
    }

    public function change_status($id) {
        $order = Order::where('id',$id)->first();

        switch ($order->status) {
            case 'Progress':
                Order::where('id',$id)->update(['status'=> 'Hold']);
                break;
            case 'Hold':
                Order::where('id',$id)->update(['status'=> 'Processing']);
                break;
            case 'Processing':
                Order::where('id',$id)->update(['status'=> 'Completed']);
                break;
            default:
                # code...
                break;
        }
    }
}

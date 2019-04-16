<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Http\Filters\OrderFilter;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(OrderFilter $filter){
        $data = Order::filter( $filter )->orderBy('created_at', 'DESC')->paginate();
        return view('admin.orders.index', compact('data'));
    }

    public function show( $id ){
        $order = Order::findOrFail( $id )->load('customer')->load('items');
        //$order = $order->load('customer');

        return view('admin.orders.show', compact('order') );
    }

    public function changeStatus( Request $request ){
        $order = Order::findOrFail( $request->input('id') );
        if( $order->status !=  $request->input('status') ){
            $order->status = $request->input('status');
            $order->save();
        }
        return back()->with( 'status', trans('app.success') );
    }
}

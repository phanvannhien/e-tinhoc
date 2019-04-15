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

}

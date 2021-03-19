<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Openpay;

class UserController extends Controller
{
    public function index()
    {

        $orders = Order::latest('id')->where('user_id', '=', auth()->user()->id)->get();
        return view('shop.user.profile', compact('orders'));
    }


    public function showOrders()
    {
        $orders = Order::latest('id')->where('user_id', '=', auth()->user()->id)->get();
        return view('shop.user.orders', compact('orders'));
    }
}

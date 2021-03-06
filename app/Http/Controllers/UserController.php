<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $orders = Order::latest('id')->where('user_id','=',auth()->user()->id)->get();
        return view('landing.user.profile',compact('orders'));
    }
}

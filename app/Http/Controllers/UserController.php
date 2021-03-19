<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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


    public function edit()
    {
        $user = auth()->user();
        return view('shop.user.settings', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $user = auth()->user();
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withToastError('Contraseña actual no coincide');
        } else {
            $user->forceFill([
                'password' => Hash::make($request->password),
            ])->save();
            return back()->withToastSuccess('Contraseña actualizada con éxito');
        }
    }
}

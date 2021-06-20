<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = Order::latest('id')->where('user_id', '=', auth()->user()->id)->paginate(5);
        return view('bajce.user.profile', compact('orders'));
    }


    public function showOrders()
    {
        $orders = Order::latest('id')->where('user_id', '=', auth()->user()->id)->paginate(5);
        return view('bajce.user.my-orders', compact('orders'));
    }


    public function edit()
    {
        $user = auth()->user();
        return view('bajce.user.settings', compact('user'));
    }

    public function updateInformationProfile(Request $request)
    {
        $user = auth()->user()->id;
        $user = User::find($user);
        $user->update($request->all());

        return back()->withToastSuccess('Informacion actualizada con éxito');;
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

<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function store(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->where('status', 1)->first();
        if (!$coupon) {
            return redirect()->route('cart')->withToastError('Cupon invalido');
        }
        Cart::discount($coupon->value);
        return redirect()->route('cart')->withToastSuccess('Cupon aplicado');
    }

    public function destroy()
    {
        session()->forget('coupon');
        return redirect()->route('cart')->withToastSuccess('Cupon has been removed');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /* public function store(Request $request){
        $coupon = Coupon::where('code',$request->coupon_code)->first();

        if (!$coupon) {
            return redirect()->route('cart')->withToastError('Cupon invalido');
        }
        session()->put('coupon',[
            'name' => $coupon->code,
            'discount' => $coupon->discount(Cart::total()),
        ]);

        return redirect()->route('cart')->withToastSuccess('Cupon aplicado');
    } */
    public function store(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();

        if (!$coupon) {
            return redirect()->route('cart')->withToastError('Cupon invalido');
        }
        Cart::discount($coupon->value);

/*         if ($coupon->type == 'fixed') {
            Cart::discount($coupon->value);
        } elseif ($this->type == 'percent') {
            Cart::discount(($coupon->percent_off / 100) * Cart::total());
        } else {
            return 0;
        } */

        return redirect()->route('cart')->withToastSuccess('Cupon aplicado');
    }
    public function destroy()
    {
        session()->forget('coupon');
        return redirect()->route('cart')->withToastSuccess('Cupon has been removed');
    }
}

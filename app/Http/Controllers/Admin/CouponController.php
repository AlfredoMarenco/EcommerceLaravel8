<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CouponRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.coupons.index')->only('index');
        $this->middleware('can:admin.coupons.create')->only('create', 'store');
        $this->middleware('can:admin.coupons.edit')->only('edit', 'update');
        $this->middleware('can:admin.coupons.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.coupons.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponRequest $request)
    {
        if ($request->type == 'fixed') {
            $coupon = Coupon::create([
                'code' => $request->code,
                'type' => $request->type,
                'value' => $request->discount,
                'status' => $request->status,
                'min_amount' => $request->min_amount,
            ]);
        } else {
            $coupon = Coupon::create([
                'code' => $request->code,
                'type' => $request->type,
                'percent_off' => $request->discount,
                'status' => $request->status,
                'min_amount' => $request->min_amount,
            ]);
        }

        return redirect()->route('admin.coupons.edit', $coupon)->withSuccess('Cupon creado con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        return  view('admin.coupons.edit', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CouponRequest $request, Coupon $coupon)
    {
        if ($request->type == 'fixed') {
            switch ($coupon->type) {
                case 'fixed':
                    $coupon->update([
                        'code' => $request->code,
                        'type' => $request->type,
                        'value' => $request->value,
                        'percent_off' => null,
                        'status' => $request->status,
                        'min_amount' => $request->min_amount,
                    ]);
                    break;
                case 'percent':
                    $coupon->update([
                        'code' => $request->code,
                        'type' => $request->type,
                        'value' => $request->percent_off,
                        'percent_off' => null,
                        'status' => $request->status,
                        'min_amount' => $request->min_amount,
                    ]);
                    break;
            }
        } else {
            switch ($coupon->type) {
                case 'fixed':
                    $coupon->update([
                        'code' => $request->code,
                        'type' => $request->type,
                        'value' => null,
                        'percent_off' => $request->value,
                        'status' => $request->status,
                        'min_amount' => $request->min_amount,
                    ]);
                    break;
                case 'percent':
                    $coupon->update([
                        'code' => $request->code,
                        'type' => $request->type,
                        'value' => null,
                        'percent_off' => $request->percent_off,
                        'status' => $request->status,
                        'min_amount' => $request->min_amount,
                    ]);
                    break;
            }
        }

        return redirect()->route('admin.coupons.edit', $coupon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return redirect()->route('admin.coupons.index')->with('Success', 'Cupon eliminado con éxito');
    }
}
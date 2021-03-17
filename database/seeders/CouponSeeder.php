<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'code' => 'ABC123',
            'type' => 'fixed',
            'value' => 30,
            'status' => 1,
        ]);

        Coupon::create([
            'code' => 'DEF456',
            'type' => 'fixed',
            'percent_off' => 30,
            'status' => 1,
        ]);
    }
}

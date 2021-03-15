<?php

use App\Models\Coupon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('code');
            $table->enum('status',[Coupon::ACTIVO,Coupon::DESACTIVADO])->default(Coupon::ACTIVO);
            $table->enum('type',[Coupon::AMOUNT,Coupon::PERCENTAGE])->default(Coupon::AMOUNT);
            $table->double('limit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCuponfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cuponfs', function (Blueprint $table) {
            $table->string('button')->nullable()->after('text');
            $table->string('link')->nullable()->after('text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cuponfs', function (Blueprint $table) {
            //
        });
    }
}

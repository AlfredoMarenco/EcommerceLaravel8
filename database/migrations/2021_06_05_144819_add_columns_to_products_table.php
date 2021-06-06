<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->text('extract')->nullable();
            $table->string('folio')->nullable();
            $table->unsignedInteger('folio_visible')->default(0);
            $table->string('categoria')->nullable();
            $table->unsignedInteger('categoria_visible')->default(0);
            $table->string('ficha')->nullable();
            $table->unsignedInteger('ficha_visible')->default(0);
            $table->string('garantia')->nullable();
            $table->unsignedInteger('garantia_visible')->default(0);
            $table->string('usos')->nullable();
            $table->unsignedInteger('usos_visible')->default(0);
            $table->string('contenido')->nullable();
            $table->unsignedInteger('contenido_visible')->default(0);
            $table->string('montaje')->nullable();
            $table->unsignedInteger('montaje_visible')->default(0);
            $table->string('capacidad')->nullable();
            $table->unsignedInteger('capacidad_visible')->default(0);
            $table->string('marca')->nullable();
            $table->unsignedInteger('marca_visible')->default(0);
            $table->string('material')->nullable();
            $table->unsignedInteger('material_visible')->default(0);
            $table->string('medidas')->nullable();
            $table->unsignedInteger('medidas_visible')->default(0);
            $table->string('medidasmodulo')->nullable();
            $table->unsignedInteger('medidasmodulo_visible')->default(0);
            $table->string('acabado')->nullable();
            $table->unsignedInteger('acabado_visible')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}

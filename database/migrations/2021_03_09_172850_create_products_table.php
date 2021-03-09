<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('vehicle');
            $table->string('season');
            $table->integer('on_sale')->nullable();
            $table->float('price', 8, 2)->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->integer('radius')->nullable();
            $table->string('speed_index')->nullable();
            $table->string('weight')->nullable();
            $table->string('load')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('design')->nullable();
            $table->string('special_label')->nullable();
            $table->string('ean')->nullable();
            $table->string('country')->nullable();
            $table->string('image_src')->nullable();
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
        Schema::dropIfExists('products');
    }
}

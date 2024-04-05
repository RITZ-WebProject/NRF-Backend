<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
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
            $table->string('category_id');
            $table->string('product_name');
            $table->string('description');
            $table->string('price');
            $table->integer('small_quantity')->default(0);
            $table->integer('medium_quantity')->default(0);
            $table->integer('large_quantity')->default(0);
            $table->integer('xlarge_quantity')->default(0);
            $table->string('photo');
            $table->timestamp('visable_time');
            $table->string('status');
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

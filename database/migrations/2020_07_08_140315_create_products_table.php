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
            $table->integer('categories_id');
            $table->integer('sub_category_id')->nullable();
            $table->integer('sections_id')->nullable();
            $table->string('title');
            $table->text('description');
            $table->float('amount');
            $table->string('image');
            $table->text('images');
            $table->integer('rate')->default(0);
            $table->integer('rate_counter')->default(0);
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

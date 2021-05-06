<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('price');
            $table->string('sort_desc')->nullable();
            $table->string('desc', 2080)->nullable();
            $table->integer('stock');
            $table->integer('bought')->default(0);
            $table->integer('warranty');
            $table->integer('discount')->default(0);
            $table->foreignId('category_id')->references('id')->on('categories')
                ->onDelete('cascade');
            $table->foreignId('brand_id')->references('id')->on('brands')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('products');
    }
}

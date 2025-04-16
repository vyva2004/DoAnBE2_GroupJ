<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('product')){
            Schema::create('product', function (Blueprint $table) {
                $table->bigIncrements('product_id');
                $table->string('product_name');
                $table->double('product_price');
                $table->integer('product_qty');
                $table->integer('category_id');
                $table->integer('brand_id');
                $table->string('product_description', 10000);
                $table->string('product_status');
                $table->string('product_images_1')->nullable();
                $table->string('product_images_2')->nullable();
                $table->string('product_images_3')->nullable();
                $table->timestamps(); // created_at, updated_at
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};

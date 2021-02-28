<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_product', function (Blueprint $table) {
            $table->integer('category_id');
            $table->integer('product_id');

            $table->foreign('product_id')->references('id')->on('Products')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('Products')->onUpdate('cascade');

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade');

            $table->primary(['product_id','category_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_product');
    }
}

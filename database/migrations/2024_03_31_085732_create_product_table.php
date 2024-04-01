<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
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
            $table->string('name');
            $table->string('nid');
            $table->string('itemId');
            $table->json('icons');
            $table->string('image');
            $table->boolean('isSmartImage');
            $table->json('utLogMap');
            $table->string('originalPriceShow')->nullable();
            $table->string('priceShow');
            $table->float('ratingScore');
            $table->integer('review');
            $table->string('location');
            $table->json('description');
            $table->json('thumbs');
            $table->string('sellerName');
            $table->string('sellerId');
            $table->string('brandName');
            $table->string('brandId');
            $table->string('cheapest_sku');
            $table->string('skuId');
            $table->string('sku');
            $table->json('categories');
            $table->boolean('showFeedBack');
            $table->integer('price');
            $table->integer('restrictedAge');
            $table->boolean('inStock');
            $table->string('clickTrace');
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

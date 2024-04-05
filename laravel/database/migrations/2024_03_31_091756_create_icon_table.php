<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icons', function (Blueprint $table) {
            $table->id('icon_id');
            $table->foreignId('product_id')->constrained('products');
            $table->string('domClass');
            $table->string('type');
            $table->string('group');
            $table->string('showType');
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
        Schema::dropIfExists('icons');
    }
}

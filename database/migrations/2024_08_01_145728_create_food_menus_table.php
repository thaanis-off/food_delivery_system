<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('food_menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('resturants_id');
            $table->integer('mrp');
            $table->integer('selling_price');
            $table->text('description');
            $table->boolean('top_dishes');
            $table->string('image');
            $table->timestamps();
            $table->foreign('resturants_id')->references('id')->on('resturants');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_menus');
    }
};
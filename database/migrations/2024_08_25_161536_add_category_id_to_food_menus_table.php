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
        Schema::table('food_menus', function (Blueprint $table) {
            //Add category column to food_menu table
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('resturant_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('resturant_id')->references('id')->on('resturants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('food_menus', function (Blueprint $table) {
            //Delete cateogy  column
            $table->dropColumn('category_id');
            $table->dropColumn('resturant_id');
        });
    }
};
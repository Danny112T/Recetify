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
        Schema::table('recipes', function (Blueprint $table) {
            $table->dropColumn('image_pf_path')->nullable();
        });

        Schema::table('steps', function(Blueprint $table){
            $table->dropColumn('image_path')->nullable();
        });

        Schema::table('cat_ingredients', function(Blueprint $table){
            $table->dropColumn('image_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recipes', function (Blueprint $table) {
            $table->string('image_pf_path')->nullable();
        });

        Schema::table('steps', function(Blueprint $table){
            $table->string('image_path')->nullable();
        });

        Schema::table('cat_ingredients', function(Blueprint $table){
            $table->string('image_path')->nullable();
        });
    }
};

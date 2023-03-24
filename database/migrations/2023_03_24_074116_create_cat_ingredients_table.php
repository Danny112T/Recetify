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
        Schema::create('cat_ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_path');
            $table->float('calories')->nullable();
            $table->float('fat')->nullable();
            $table->float('carbs')->nullable();
            $table->float('proteins')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cat_ingredients');
    }
};

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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->max(200);
            $table->text('description')->nullable();
            $table->string('image_pf_path');
            $table->enum('type_food',['mexicana','americana','italiana','china']);
            $table->enum('time_food',['desayuno','comida','cena','colacion']);
            $table->enum('diet',['omnivoro','Ovo-lacteo Vegetariano', 'Vegetariano', 'crudivegana']);
            $table->float('prep_time');
            $table->float('calories')->nullable();
            $table->float('fat')->nullable();
            $table->float('carbs')->nullable();
            $table->float('proteins')->nullable();
            $table->float('rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};

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
        Schema::dropIfExists('preferences');

        Schema::dropIfExists('ingredients');

        Schema::dropIfExists('unities');

        schema::create('Cat_ingredient_User', function (Blueprint $table) { //tabla preferencias
            $table->id();
            $table->foreignId('cat_ingredient_id')->references('id')->on('cat_ingredients')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('Cat_ingredient_Recipe', function (Blueprint $table) { // tabla ingredientes
            $table->id();
            $table->foreignId('cat_ingredient_id')->references('id')->on('cat_ingredients')->onDelete('cascade');
            $table->foreignId('recipe_id')->references('id')->on('recipes')->onDelete('cascade');
            $table->float('quantity');
            $table->enum('unit', ['g', 'ml', 'unit']);
            $table->timestamps();
        });

        Schema::table('cat_ingredients', function (Blueprint $table) { // actualizar tabla de cat_ingredient
            $table->enum('diet',[
                'Omnivoro',
                'OLV',
                'Vegetariano',
                'Crudivegana',
            ])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('preferences', function (Blueprint $table) {
            $table->id();
            $table->string('allergy');
            $table->string('diet');
            $table->timestamps();
        });

        Schema::create('ingredients', function (Blueprint $table) {
            $table->float('quantity');
            $table->float('calories')->nullable();
            $table->float('fat')->nullable();
            $table->float('carbs')->nullable();
            $table->float('proteins')->nullable();
            $table->timestamps();
        });

        Schema::create('unities', function (Blueprint $table) {
            $table->id();
            $table->string('unidad');
            $table->timestamps();
        });

        Schema::dropIfExists('Cat_ingredient_User');

        Schema::dropIfExists('Cat_ingredient_Recipe');

        Schema::table('cat_ingredients', function (Blueprint $table) {
            $table->dropColumn('diet');
        });
    }
};

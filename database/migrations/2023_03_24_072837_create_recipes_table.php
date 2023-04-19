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
            $table->integer('user_id')->unsigned();
            $table->string('title')->max(200);
            $table->text('description')->nullable()->max(1000);
            $table->string('image_pf_path')->nullable();
            $table->enum('origen_food',[
                'Mexicana',
                'Americana',
                'Italiana',
                'China',
            ]);
            $table->enum('time_food',['Desayuno','Comida','Cena','Colacion','Aperitivo']);
            $table->enum('diet',[
                'Omnivoro',
                'OLV',
                'Vegetariano',
                'Crudivegana',
            ]);
            $table->float('prep_time')->startingValue(0.00);
            $table->float('calories')->nullable();
            $table->float('fat')->nullable();
            $table->float('carbs')->nullable();
            $table->float('proteins')->nullable();
            $table->float('rate')->startingValue(5.00)->nullable();
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

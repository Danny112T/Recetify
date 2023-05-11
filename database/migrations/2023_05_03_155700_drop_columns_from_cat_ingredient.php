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
        Schema::table('cat_ingredients', function (Blueprint $table) {
            $table->dropColumn('calories')->nullable();
            $table->dropColumn('fat')->nullable();
            $table->dropColumn('carbs')->nullable();
            $table->dropColumn('proteins')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cat_ingredients', function (Blueprint $table) {
            $table->float('calories')->nullable();
            $table->float('fat')->nullable();
            $table->float('carbs')->nullable();
            $table->float('proteins')->nullable();
        });
    }
};

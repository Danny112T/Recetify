<?php

namespace Database\Seeders;

use App\Models\Cat_ingredient;
use App\Models\Images;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cat_ingredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // MANZANA
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Manzana';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/manzana.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // HUEVO
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Huevo';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/huevo.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // LECHE
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Leche';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/leche.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // MANTEQUILLA
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Mantequilla';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/mantequilla.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // ACEITE
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Aceite';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/aceite.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // SAL
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Sal';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/sal.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // PIMIENTA NEGRA
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Pimienta Negra';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/pimienta.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // AJO
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Ajo';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/ajo.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // CEBOLLA
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Cebolla';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/cebolla.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // TOMATE
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Tomate';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/tomate.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // HARINA
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Harina';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/harina.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // AZÚCAR
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Azúcar';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/azucar.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();
    }
}

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

        // POLLO
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Pollo';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/pollo.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // CARNE DE RES
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Carne de Res';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/carneres.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // PESCADO
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Pescado';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/pescado.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // CERDO
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Cerdo';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/cerdo.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // CORDERO
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Cordero';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/cordero.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Camaron
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Camaron';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/camaron.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // SALMON
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Salmón';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/salmon.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Bacalao
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Bacalao';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/bacalo.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // CALAMAR
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Calamar';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/calamar.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Langosta
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Langosta';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/langosta.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // PULPO
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Pulpo';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/pulpo.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Atún
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Atún';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/atun.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // LENTEJAS
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Lentejas';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/lentas.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Garbanzos
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Garbanzos';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/garbanzos.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Frijoles N
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Frijoles Negros';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/frijolnegro.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Frijoles Rojos
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Frijoles Rojos';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/frijolrojo.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Frijol Blanco
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Frijoles Blancos';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/frijolblanco.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // ARROZ
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Arroz';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/arroz.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Espaguetis
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Espaguetis';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/espaguetis.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Fideos
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Fideos';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/fideos.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Papa
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Papa';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/papa.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Zanahoria
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Zanahoria';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/zanahoria.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Calabacín
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Calabacín';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/calabacin.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Limon
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Limón';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/limon.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Naranja
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'naranja';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/naranja.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Canela
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Canela';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/canela.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Miel
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Miel';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/miel.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Vainilla
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Vainilla';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/vainilla.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();

        // Piña
        $ingredient = new Cat_ingredient();
        $ingredient->name = 'Piña';
        $ingredient->save();
        $image = new Images();
        $image->url = 'public/saved/piña.png';
        $image->imageable_id = $ingredient->id;
        $image->imageable_type = 'App\Models\Cat_ingredient';
        $ingredient->save();
        $image->save();













































    }
}

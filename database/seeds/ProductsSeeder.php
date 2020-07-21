<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'name' => 'Tacos al pastor',
                'description' => "Los tacos son el plato nacional de México, que se remonta a las minas de plata mexicanas del siglo XVIII, cuando la palabra taco se refería a la pólvora que se envolvía en un pedazo de papel y se insertaba en las rocas",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pizza Napolitana',
                'description' => "Los habitantes de Italia, específicamente en Nápoles, han hecho historia en el mundo gastronómico.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Churrasco',
                'description' => "El churrasco brasileño se trata de un manjar nacido de la tradición de los gauchos que asaban un trozo de carne en un hoyo cavado en el suelo.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Khachapuri',
                'description' => "Este platillo es sumamente popular en la cocina de Georgia y está compuesto de una masa de pan fermentada rellena de queso, huevo y un toque de mantequilla.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ceviche',
                'description' => "El ceviche peruano está elaborado a base de trozos de pescado fresco, limón y ají. Además, en este ranking recomiendan al restaurante de Javier Wong, en el distrito de La Victoria, cono uno de los mejore sitios para comer este exquisito plato.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sushi',
                'description' => "El sushi, del que hay muchas variaciones, está hecho de arroz adobado con pescado o mariscos crudos (en algunos casos cocinados), vegetales y hojas de algas o nori.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

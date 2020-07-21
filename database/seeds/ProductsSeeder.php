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
                'image_url' => 'https://www.edamam.com/food-img/def/def506222dc404affdfbf7b7133a34c6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pizza Napolitana',
                'description' => "Los habitantes de Italia, específicamente en Nápoles, han hecho historia en el mundo gastronómico.",
                'image_url' => 'https://www.edamam.com/food-img/c01/c0150280d71059c23c025f501f502dc0.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Churrasco',
                'description' => "El churrasco brasileño se trata de un manjar nacido de la tradición de los gauchos que asaban un trozo de carne en un hoyo cavado en el suelo.",
                'image_url' => 'https://www.edamam.com/web-img/0eb/0ebcd46eb39d454a29ec8f1b0e7ab875',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Khachapuri',
                'description' => "Este platillo es sumamente popular en la cocina de Georgia y está compuesto de una masa de pan fermentada rellena de queso, huevo y un toque de mantequilla.",
                'image_url' => 'https://www.edamam.com/web-img/50b/50b2e6be7247fdbced659cb81c300653.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ceviche',
                'description' => "El ceviche peruano está elaborado a base de trozos de pescado fresco, limón y ají. Además, en este ranking recomiendan al restaurante de Javier Wong, en el distrito de La Victoria, cono uno de los mejore sitios para comer este exquisito plato.",
                'image_url' => 'https://www.edamam.com/web-img/ea8/ea8636ca18406dae2962ef3de7573dc2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sushi',
                'description' => "El sushi, del que hay muchas variaciones, está hecho de arroz adobado con pescado o mariscos crudos (en algunos casos cocinados), vegetales y hojas de algas o nori.",
                'image_url' => 'https://www.edamam.com/web-img/d9d/d9dd4def0e806fd0432e7ccc7623b594.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

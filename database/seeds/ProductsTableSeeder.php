<?php

use App\Categoria;
use App\Producto;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 30; $i++)
        {
            Producto::create([
            'nombre' => 'Salon ' . $i,
            'titulo' => 'salon-' . $i,
            'precio' => rand(200, 10000),
            'stock' => rand(0, 30),
            'descripcion' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum diam hendrerit, efficitur nulla at, consectetur quam. Nam nisl tellus, mattis non neque sed, posuere interdum nisl. Nunc euismod ex ut sollicitudin tincidunt. Nam vulputate tempus urna malesuada mollis. Duis tempor erat nec sem sagittis egestas. Phasellus sed justo sed magna sodales condimentum sed at augue. Integer condimentum a augue pharetra vestibulum. Suspendisse ut turpis in velit posuere varius.'
            ])->categoria()->associate(Categoria::find(1))->save();
        }

        for ($i = 1; $i <= 30; $i++)
        {
            Producto::create([
            'nombre' => 'Comedor ' . $i,
            'titulo' => 'comedor-' . $i,
            'precio' => rand(200, 10000),
            'stock' => rand(0, 30),
            'descripcion' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum diam hendrerit, efficitur nulla at, consectetur quam. Nam nisl tellus, mattis non neque sed, posuere interdum nisl. Nunc euismod ex ut sollicitudin tincidunt. Nam vulputate tempus urna malesuada mollis. Duis tempor erat nec sem sagittis egestas. Phasellus sed justo sed magna sodales condimentum sed at augue. Integer condimentum a augue pharetra vestibulum. Suspendisse ut turpis in velit posuere varius.'
            ])->categoria()->associate(Categoria::find(2))->save();
        }

        for ($i = 1; $i <= 30; $i++)
        {
            Producto::create([
            'nombre' => 'Living ' . $i,
            'titulo' => 'living-' . $i,
            'precio' => rand(200, 10000),
            'stock' => rand(0, 30),
            'descripcion' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum diam hendrerit, efficitur nulla at, consectetur quam. Nam nisl tellus, mattis non neque sed, posuere interdum nisl. Nunc euismod ex ut sollicitudin tincidunt. Nam vulputate tempus urna malesuada mollis. Duis tempor erat nec sem sagittis egestas. Phasellus sed justo sed magna sodales condimentum sed at augue. Integer condimentum a augue pharetra vestibulum. Suspendisse ut turpis in velit posuere varius.'
            ])->categoria()->associate(Categoria::find(3))->save();
        }

        for ($i = 1; $i <= 30; $i++)
        {
            /*$category = Categoria::find(4);*/

            Producto::create([
            'nombre' => 'Dormitorio ' . $i,
            'titulo' => 'dormitorio-' . $i,
            'precio' => rand(200, 10000),
            'stock' => rand(0, 30),
            'descripcion' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum diam hendrerit, efficitur nulla at, consectetur quam. Nam nisl tellus, mattis non neque sed, posuere interdum nisl. Nunc euismod ex ut sollicitudin tincidunt. Nam vulputate tempus urna malesuada mollis. Duis tempor erat nec sem sagittis egestas. Phasellus sed justo sed magna sodales condimentum sed at augue. Integer condimentum a augue pharetra vestibulum. Suspendisse ut turpis in velit posuere varius.'
            ])->categoria()->associate(Categoria::find(4))->save();
        }

        for ($i = 1; $i <= 30; $i++)
        {
            Producto::create([
            'nombre' => 'Oficina ' . $i,
            'titulo' => 'oficina-' . $i,
            'precio' => rand(200, 10000),
            'stock' => rand(0, 30),
            'descripcion' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum diam hendrerit, efficitur nulla at, consectetur quam. Nam nisl tellus, mattis non neque sed, posuere interdum nisl. Nunc euismod ex ut sollicitudin tincidunt. Nam vulputate tempus urna malesuada mollis. Duis tempor erat nec sem sagittis egestas. Phasellus sed justo sed magna sodales condimentum sed at augue. Integer condimentum a augue pharetra vestibulum. Suspendisse ut turpis in velit posuere varius.'
            ])->categoria()->associate(Categoria::find(5))->save();
        }

        for ($i = 1; $i <= 30; $i++)
        {
            Producto::create([
            'nombre' => 'Jardin ' . $i,
            'titulo' => 'jardin-' . $i,
            'precio' => rand(200, 10000),
            'stock' => rand(0, 30),
            'descripcion' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum diam hendrerit, efficitur nulla at, consectetur quam. Nam nisl tellus, mattis non neque sed, posuere interdum nisl. Nunc euismod ex ut sollicitudin tincidunt. Nam vulputate tempus urna malesuada mollis. Duis tempor erat nec sem sagittis egestas. Phasellus sed justo sed magna sodales condimentum sed at augue. Integer condimentum a augue pharetra vestibulum. Suspendisse ut turpis in velit posuere varius.'
            ])->categoria()->associate(Categoria::find(6))->save();
        }

        for ($i = 1; $i <= 30; $i++)
        {
            Producto::create([
            'nombre' => 'Baño ' . $i,
            'titulo' => 'bano-' . $i,
            'precio' => rand(200, 10000),
            'stock' => rand(0, 30),
            'descripcion' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum diam hendrerit, efficitur nulla at, consectetur quam. Nam nisl tellus, mattis non neque sed, posuere interdum nisl. Nunc euismod ex ut sollicitudin tincidunt. Nam vulputate tempus urna malesuada mollis. Duis tempor erat nec sem sagittis egestas. Phasellus sed justo sed magna sodales condimentum sed at augue. Integer condimentum a augue pharetra vestibulum. Suspendisse ut turpis in velit posuere varius.'
            ])->categoria()->associate(Categoria::find(7))->save();
        }

        for ($i = 1; $i <= 30; $i++)
        {
            Producto::create([
            'nombre' => 'Limpieza ' . $i,
            'titulo' => 'limpieza-' . $i,
            'precio' => rand(200, 10000),
            'stock' => rand(0, 30),
            'descripcion' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum diam hendrerit, efficitur nulla at, consectetur quam. Nam nisl tellus, mattis non neque sed, posuere interdum nisl. Nunc euismod ex ut sollicitudin tincidunt. Nam vulputate tempus urna malesuada mollis. Duis tempor erat nec sem sagittis egestas. Phasellus sed justo sed magna sodales condimentum sed at augue. Integer condimentum a augue pharetra vestibulum. Suspendisse ut turpis in velit posuere varius.'
            ])->categoria()->associate(Categoria::find(8))->save();
        }
    }
}

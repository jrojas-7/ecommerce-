<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::insert([
            ['nombre' => 'Salón', 'titulo' => 'salon'],
            ['nombre' => 'Comedor', 'titulo' => 'comedor'],
            ['nombre' => 'Living', 'titulo' => 'living'],
            ['nombre' => 'Dormitorio', 'titulo' => 'dormitorio'],
            ['nombre' => 'Oficina', 'titulo' => 'oficina'],
            ['nombre' => 'Jardin', 'titulo' => 'jardin'],
            ['nombre' => 'Baño', 'titulo' => 'bano'],
            ['nombre' => 'Limpieza', 'titulo' => 'limpieza']
        ]);
    }
}

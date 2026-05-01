<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Arr con categorias de distintos tipos de equipo 
        $categorias = [
            'Drones',
            'Monitores',
            'Instrumentos',
            'Pedales',
            'Luces',
            'Lentes',
            'Camaras',
            'Amplificadores',
            'Interfaces',
            'Otros',
        ];

        foreach ($categorias as $categoria) {
            //Crea un registro en la tabla 'categorias'
            Categoria::create([
                'nombre' => $categoria,
                'slug' => Str::slug($categoria),
            ]);
        }
    }
}

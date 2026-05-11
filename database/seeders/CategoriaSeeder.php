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
            'Micrófonos',
            'Instrumentos',
            'Pedales',
            'Luces',
            'Lentes',
            'Cámaras',
            'Amplificadores',
            'Interfaces',
            'Otros',
        ];

        //Recorre cada categoría y se inserta en la BD
        foreach ($categorias as $categoria) {
            //Busca primero un registro con ese slug
            //Crea la categoría si no existe o actualiza el nombre ya existe
            Categoria::updateOrCreate(
                ['slug' => Str::slug($categoria)],
                ['nombre' => $categoria]
            );
        }
    }
}

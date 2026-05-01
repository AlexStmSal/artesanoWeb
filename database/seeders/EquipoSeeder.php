<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equipo;
use App\Models\Categoria;


class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Obtener categorias de ejemplo para asignarlas a los equipos
        $categoriaCamaras = Categoria::where('nombre', 'Camaras')->first();
        $categoriaLentes = Categoria::where('nombre', 'Lentes')->first();
        $categoriaLuces = Categoria::where('nombre', 'Luces')->first();

        //Crear equipos de ejemplo
        Equipo::create([
            'categoria_id' => $categoriaCamaras->id,
            'nombre' => 'Sony A7 III',
            'marca' => 'Sony',
            'modelo' => 'A7 III',
            'cantidad' => 2,
            'descripcion' => 'Cámara mirrorless full frame',
            'activo' => true,
        ]);

        Equipo::create([
            'categoria_id' => $categoriaLentes->id,
            'nombre' => '24-70mm f/2.8',
            'marca' => 'Sigma',
            'modelo' => 'Art',
            'cantidad' => 1,
            'descripcion' => 'Lente versátil para fotografía y video',
            'activo' => true,
        ]);

        Equipo::create([
            'categoria_id' => $categoriaLuces->id,
            'nombre' => 'Aputure 120D',
            'marca' => 'Aputure',
            'modelo' => '120D II',
            'cantidad' => 3,
            'descripcion' => 'Foco LED profesional',
            'activo' => true,
        ]);
    }
}

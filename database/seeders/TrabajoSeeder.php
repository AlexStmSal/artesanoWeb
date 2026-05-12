<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trabajo;
use Illuminate\Support\Str;

class TrabajoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trabajos = [
            [
                'titulo' => 'Proyecto audiovisual 01',
                'descripcion' => 'Trabajo audiovisual realizado por Artesano Studio.',
                'url_video' => 'https://www.youtube.com/embed/7yGmUXBPVpI',
                'destacado' => true,
            ],
            [
                'titulo' => 'Proyecto audiovisual 02',
                'descripcion' => 'Producción visual enfocada en composición y detalle.',
                'url_video' => 'https://www.youtube.com/embed/VIDEO_ID',
                'destacado' => false,
            ],
        ];

        // Inserta cada trabajo en la base de datos.
        foreach ($trabajos as $trabajo) {
            Trabajo::create([
                'titulo' => $trabajo['titulo'],
                'slug' => Str::slug($trabajo['titulo']),
                'descripcion' => $trabajo['descripcion'],
                'url_video' => $trabajo['url_video'],
                'destacado' => $trabajo['destacado'],
            ]);
        }
    }
}

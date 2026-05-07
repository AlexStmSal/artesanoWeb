<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Ejecuta los seeders en orden
        //Primero categorías (equipos dependen de ellos)
        //Después equipos, trabajos y usuario administrador
        $this->call([
            CategoriaSeeder::class,
            EquipoSeeder::class,
            TrabajoSeeder::class,
            AdminUserSeeder::class,
        ]);
    }
}

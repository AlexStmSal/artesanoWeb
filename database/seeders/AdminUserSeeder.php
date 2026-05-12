<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Crear o actulizar al usuario admin
        User::updateOrCreate(
            ['email' => env('ADMIN_EMAIL', 'admin@artesanostudio.com')],
            [
                'name' => env('ADMIN_NAME', 'Admin Artesano'),
                'password' => Hash::make(env('ADMIN_PASSWORD', 'admin1234')),
            ]
        );
    }
}

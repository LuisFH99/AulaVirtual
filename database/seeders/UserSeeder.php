<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user1 = User::create([
            'name' => 'estudiante',
            'email' => 'estudiante@hotmail.com',
            'role' => 'estudiante',
            'password' => bcrypt('12345678'),
        ])->assignRole('estudiante');


        $user2 = User::create([
            'name' => 'docente',
            'email' => 'docente@gmail.com',
            'role' => 'docente',
            'password' => bcrypt('12345678'),
        ])->assignRole('docente');

        $user3 = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'administrador',
            'password' => bcrypt('12345678'),
        ])->assignRole('administrador');
    }
}

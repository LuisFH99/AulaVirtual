<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //Creacion de roles del sistema
 
    $role1= Role::Create(['name' => 'estudiante']);
    $role3= Role::Create(['name' => 'docente']);
    }
}

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
    $role2= Role::Create(['name' => 'docente']);
<<<<<<< HEAD
    $role3= Role::Create(['name' => 'admin']);
=======
    $role3= Role::Create(['name' => 'administrador']);
>>>>>>> b77daab872adeb4955b5a57d2f97041e7855c9c8
    }
}

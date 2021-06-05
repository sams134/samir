<?php

namespace Database\Seeders;

use App\Models\User_type;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User_type::create(['name' => 'Cliente']);
        User_type::create(['name' => 'Administracion CME']);
        User_type::create(['name' => 'Tecnico CME']);
        User_type::create(['name' => 'Proveedor']);
        User_type::create(['name' => 'Taller Asociado']);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Internal\Material_type;
use Illuminate\Database\Seeder;

class MaterialTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Material_type::create(['name'=>'Alambres']);
        Material_type::create(['name'=>'Barnices']);
        Material_type::create(['name'=>'Borneras']);
        Material_type::create(['name'=>'Cables']);
        Material_type::create(['name'=>'Cintas']);
        Material_type::create(['name'=>'Cojinetes']);
        Material_type::create(['name'=>'Cunas']);
        Material_type::create(['name'=>'Espagettis']);
        Material_type::create(['name'=>'Grasas']);
        Material_type::create(['name'=>'Papeles']);
        Material_type::create(['name'=>'Pinturas']);
        Material_type::create(['name'=>'Sensores']);
        Material_type::create(['name'=>'Soldaduras']);
        Material_type::create(['name'=>'Terminales']);
        Material_type::create(['name'=>'Ventiladores']);
        Material_type::create(['name'=>'Tornilleria']);
        
        
        
        
    }
}

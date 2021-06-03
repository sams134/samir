<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Unit::create(['name'=>'Gramos','shortcut'=>'g']);
        Unit::create(['name'=>'Kilogramos','shortcut'=>'Kg']);
        Unit::create(['name'=>'Libras','shortcut'=>'lb']);
        Unit::create(['name'=>'Metros','shortcut'=>'m']);
        Unit::create(['name'=>'Centimetros','shortcut'=>'cm']);
        Unit::create(['name'=>'Botes','shortcut'=>'bot']);
        Unit::create(['name'=>'Rollos','shortcut'=>'rol']);
        Unit::create(['name'=>'Pies','shortcut'=>'ft']);
        Unit::create(['name'=>'Yardas','shortcut'=>'yd']);
        Unit::create(['name'=>'Unidades','shortcut'=>'Un']);
        Unit::create(['name'=>'Litros','shortcut'=>'lt']);
        Unit::create(['name'=>'Galones','shortcut'=>'gal']);
    }
}

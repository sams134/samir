<?php

namespace Database\Seeders;

use App\Models\External\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Status::create(['name'=>'En linea']);
        Status::create(['name'=>'Descompuesto(a)']);
        Status::create(['name'=>'En reserva']);
        Status::create(['name'=>'Almacenado']);
    }
}

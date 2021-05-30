<?php

namespace Database\Seeders;

use App\Models\Internal\Job_type;
use Illuminate\Database\Seeder;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Job_type::create(['name'=>'Bobinado']);
        Job_type::create(['name'=>'Manteniiento Completo']);
        Job_type::create(['name'=>'Manteniiento Eléctrico']);
        Job_type::create(['name'=>'Manteniiento Mecánico']);
        Job_type::create(['name'=>'Balanceo Dinámico']);
        Job_type::create(['name'=>'Soldadura']);
        Job_type::create(['name'=>'Pruebas y análisis en taller']);
        Job_type::create(['name'=>'Pruebas y análisis en sitio']);
        Job_type::create(['name'=>'Venta de Producto']);
        Job_type::create(['name'=>'Asesoría']);
        
    }
}

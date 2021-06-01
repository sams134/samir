<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Internal\Job_type;
use App\Models\Internal\Reason_for_service;

class ReasonForServiceSeeder extends Seeder
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
        Reason_for_service::create(['name'=>'Falla, Catastrofica']);
        Reason_for_service::create(['name'=>'Falla, Ya no arranca']);
        Reason_for_service::create(['name'=>'Falla, Parametros como ruido o temperatura muy malos']);
        Reason_for_service::create(['name'=>'Falla, Falta de potencia']);
        Reason_for_service::create(['name'=>'Falla, Parámetros eletricos malos']);
        Reason_for_service::create(['name'=>'Mantenimiento Preventivo, por horas']);
        Reason_for_service::create(['name'=>'Mantenimiento Preventivo, por análisis predictivo']);
        Reason_for_service::create(['name'=>'Mantenimiento Preventivo, por ruido o temperatura']);
        Reason_for_service::create(['name'=>'Mantenimiento Preventivo, por vibración']);
        Reason_for_service::create(['name'=>'Mantenimiento Preventivo, por golpe']);
        Reason_for_service::create(['name'=>'Rediseño, Cambio de voltaje o velocidad']);
        Reason_for_service::create(['name'=>'Rediseño, Cambio a inverter duty']);
        
    }
}

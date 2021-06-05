<?php

namespace Database\Seeders;

use App\Models\Internal\Priority;
use Illuminate\Database\Seeder;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Priority::create([
            'name'=>'No Autorizado',
            'priority' => 1,
            'description' => "Motor tiene la mas baja prioridad"]);
        Priority::create([
            'name'=>'Diagnostico',
            'priority' => 2,
            'description' => "Motor se asigna o trabaja cuando ningun autorizado ingresa"]);
        Priority::create([
            'name'=>'Autorizado',
            'priority' => 3,
            'description' => "Motor se asigna o trabaja cuando ningun autorizado ingresa"]);
        Priority::create([
            'name'=>'Retrasado',
            'priority' => 4,
            'description' => "La prioridad envejecio y ahora es el mas importante de los autorizados"]);
        Priority::create([
            'name'=>'Garantia',
            'priority' => 5,
            'description' => "El trabajo fallo y ahora es prioridad"]);
        Priority::create([
            'name'=>'Urgente',
            'priority' => 6,
            'description' => "Motor urgente, todo trabajo autorizado se detiene por el"]);
        Priority::create([
            'name'=>'Maxima Urgencia',
            'priority' => 7,
            'description' => "Es el motor mas urgente en taller, nadie lo retrasa, solo puede haber uno"]);
    }
}

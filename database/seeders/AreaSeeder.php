<?php

namespace Database\Seeders;

use App\Models\External\Area;
use App\Models\External\Customer;
use App\Models\External\Plant;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $customer = Customer::factory(1)->create([
            'name' => 'Ajemaya',
            'invoice_to' => 'Industria de Bebidas S.A.',
            'nit' => '148170-3'
        ]);
        $plant = Plant::factory(1)->create([
            'name' => 'Planta Amatitlan',
            'customer_id' => $customer[0]->id
        ]);
        Area::factory(1)->create(['name'=>'Linea 1','plant_id'=>$plant[0]->id]);
        Area::factory(1)->create(['name'=>'Evazados AB','plant_id'=>$plant[0]->id]);
        Area::factory(1)->create(['name'=>'Tetrapack','plant_id'=>$plant[0]->id]);
        $customers = Customer::factory(2)->create();
        foreach ($customers as $customer) {
            $plants = Plant::factory(2)->create(['customer_id'=>$customer->id]);
            foreach ($plants as $plant) {
                $areas = Area::factory(2)->create(['plant_id' => $plant->id]);
            }
        }
        
    }
}

<?php

namespace Database\Seeders;

use App\Models\Internal\Material;
use App\Models\Internal\Material_type;
use App\Models\Internal\Provider;
use App\Models\Unit;
use Database\Factories\Internal\MaterialFactory;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(MaterialTypeSeeder::class);
        $this->call(UnitSeeder::class);
        $providers = Provider::factory(10)->create();
        $material_types = Material_type::all();
        $units = Unit::all();
        foreach ($material_types as $material_type) 
        {
            Material::factory(100)->create(['material_type_id'=>$material_type->id,
                                           'unit_id' => $units->random()->id
            ])->each(function($material) use ($providers){
                $material->providers()->attach(['id'=>$providers->random()->id]);
            });
        }
        
    }
}

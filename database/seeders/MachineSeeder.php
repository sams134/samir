<?php

namespace Database\Seeders;

use App\Models\External\Area;
use App\Models\External\Machine;
use App\Models\External\Motor;
use App\Models\External\Status;
use App\Models\Photo;
use Illuminate\Database\Seeder;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $areas = Area::all();
        $status = Status::all();
        foreach ($areas as  $area) {
            $machines = Machine::factory(5)->create(['area_id'=>$area->id]);
            foreach ($machines as $machine){
                
                $machine->statuses()->attach($status->random()->id,['date_changed'=>now(),'condition'=>'2']);
              //  Photo::factory(2)->create(['photoable_id' => $machine->id,'photoable_type'=>'App\Models\External\Machine']);
                $motors = Motor::factory(10)->create(['machine_id'=>$machine->id]);
            }
        }
        
    }
}

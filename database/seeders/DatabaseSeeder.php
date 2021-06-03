<?php

namespace Database\Seeders;

use App\Models\Materials\Lipseal;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('logos');
        Storage::makeDirectory('logos');
        Storage::deleteDirectory('machines');
        Storage::makeDirectory('machines');
        // \App\Models\User::factory(10)->create();

         $this->call(UserSeeder::class);
       /* $this->call(AreaSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(MachineSeeder::class); 
        $this->call(BearingSeeder::class);
       $this->call(LipsealSeeder::class); 
       $this->call(GreaseSeeder::class);*/

       //internal
       $this->call(JobTypeSeeder::class); 
       $this->call(JobSeeder::class);
       $this->call(MaterialSeeder::class);
     

    }
}

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
        // crear directorios
        Storage::deleteDirectory('logos');
        Storage::makeDirectory('logos');
        Storage::deleteDirectory('machines');
        Storage::makeDirectory('machines');
        
        //creacion de usuarios
        $this->call(UserTypeSeeder::class);
        $this->call(UserSeeder::class);


        // external      
       /* $this->call(AreaSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(MachineSeeder::class); 
        $this->call(BearingSeeder::class);
       $this->call(LipsealSeeder::class); 
       $this->call(GreaseSeeder::class); */
        $this->call(CustomerSeeder::class);
       //internal
       $this->call(JobTypeSeeder::class); 
       $this->call(JobSeeder::class);
       $this->call(MaterialSeeder::class);
     

    }
}

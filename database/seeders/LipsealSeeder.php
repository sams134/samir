<?php

namespace Database\Seeders;

use App\Models\Materials\Lipseal;
use Illuminate\Database\Seeder;

class LipsealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //https://www.skf.com/ar/products/industrial-seals/power-transmission-seals/radial-shaft-seals
        $this->create_seal(6,16,5);
        $this->create_seal(6,16,7);
        $this->create_seal(6,22,7);

        $this->create_seal(7,16,7);
        $this->create_seal(7,22,7);

        $this->create_seal(8,18,5);
        $this->create_seal(8,18,7);
        $this->create_seal(8,22,7);
        $this->create_seal(8,24,7);

        $this->create_seal(9,22,7);

        $this->create_seal(10,19,7);
        $this->create_seal(10,20,7);
        $this->create_seal(10,22,7);
        $this->create_seal(10,24,7);
        $this->create_seal(10,25,7);
        $this->create_seal(10,26,7);
        $this->create_seal(10,30,7);

        $this->create_seal(12,19,5);

        $this->create_seal(12,22,5);
        $this->create_seal(12,22,6);
        $this->create_seal(12,22,7);

        $this->create_seal(12,24,7);
        $this->create_seal(12,25,7);
        $this->create_seal(12,28,7);
        $this->create_seal(12,30,7);
        $this->create_seal(12,32,7);
        $this->create_seal(12,37,7);

        $this->create_seal(13,26,7);

        $this->create_seal(14,24,7);
        $this->create_seal(14,25,5);
        $this->create_seal(14,26,7);
        $this->create_seal(14,28,7);
        $this->create_seal(14,30,7);


    }

    public function create_seal($shaft,$bore,$width)
    {
        Lipseal::create(['name'=>$shaft.'x'.$bore.'x'.$width,'shaft'=>$shaft,'bore'=>$bore,'width'=>$width]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Materials\Bearing;
use Illuminate\Database\Seeder;

class BearingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $deepGroove = array('60','62','63');
        foreach ($deepGroove as $type)
        for($cont = 0;$cont<22;$cont++)
        {
            $designation = $type.str_pad("".$cont,2,"0",STR_PAD_LEFT);
            Bearing::create(['name' => $designation]);
        } 
    }
}

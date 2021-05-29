<?php

namespace Database\Seeders;

use App\Models\Materials\Bearing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

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
        $max_no = 10;
        $seals = array(Bearing::SEALS_NO_SEAL,Bearing::SEALS_2RS1,Bearing::SEALS_ZZ,Bearing::SEALS_Z);
        $clerances = array(Bearing::RADIAL_CLERANCE_C2,Bearing::RADIAL_CLERANCE_C3,Bearing::RADIAL_CLERANCE_C4);
        $cages = array(Bearing::CAGE_METAL,Bearing::CAGE_BRONZE);
        $snapRings = array(0);
        $highTemperatures = array(0);
        $insulated = array(0);

        $this->bearing_creator(['60','62','63'],
                                0,5,
                                [Bearing::SEALS_NO_SEAL,Bearing::SEALS_2RS1,Bearing::SEALS_ZZ],
                                [Bearing::RADIAL_CLERANCE_C2,Bearing::RADIAL_CLERANCE_C3],
                                [Bearing::CAGE_METAL],
                                [0,1]); // snap rings
        $this->bearing_creator(['60','62','63'],
                                6,10,
                                [Bearing::SEALS_NO_SEAL,Bearing::SEALS_2RS1,Bearing::SEALS_ZZ],
                                [Bearing::RADIAL_CLERANCE_C2,Bearing::RADIAL_CLERANCE_C3],
                                [Bearing::CAGE_METAL],
                                [0,1], // snap rings
                                [0,1]);    // high temperature                
        $this->bearing_creator(['60','62','63'],
                                11,14,
                                [Bearing::SEALS_NO_SEAL,Bearing::SEALS_2RS1,Bearing::SEALS_ZZ],
                                [Bearing::RADIAL_CLERANCE_C2,Bearing::RADIAL_CLERANCE_C3,Bearing::RADIAL_CLERANCE_C4],
                                [Bearing::CAGE_METAL,Bearing::CAGE_BRONZE],
                                [0], // snap rings
                                [0,1]);  // high temperature
        $this->bearing_creator(['60'],
                                15,19,
                                [Bearing::SEALS_NO_SEAL,Bearing::SEALS_2RS1,Bearing::SEALS_ZZ],
                                [Bearing::RADIAL_CLERANCE_C2,Bearing::RADIAL_CLERANCE_C3,Bearing::RADIAL_CLERANCE_C4],
                                [Bearing::CAGE_METAL,Bearing::CAGE_BRONZE],
                                [0], // snap rings
                                [0,1]);     // high temperature
        $this->bearing_creator(['62','63'],
                                15,19,
                                [Bearing::SEALS_NO_SEAL,Bearing::SEALS_2RS1,Bearing::SEALS_ZZ],
                                [Bearing::RADIAL_CLERANCE_C2,Bearing::RADIAL_CLERANCE_C3,Bearing::RADIAL_CLERANCE_C4],
                                [Bearing::CAGE_METAL,Bearing::CAGE_BRONZE],
                                [0], // snap rings
                                [0,1], // high temperature
                                [0,1]); // insulated;     
        $this->bearing_creator(['62','63'],
                                20,30,
                                [Bearing::SEALS_NO_SEAL],
                                [Bearing::RADIAL_CLERANCE_C2,Bearing::RADIAL_CLERANCE_C3,Bearing::RADIAL_CLERANCE_C4],
                                [Bearing::CAGE_METAL,Bearing::CAGE_BRONZE],
                                [0], // snap rings
                                [0], // high temperature
                                [0,1], // insulated;  
                                2); // step   
    }
    public function create_seals($seals){
        switch ($seals)
        {
            case Bearing::SEALS_2RS1:
                return " 2RS";
            case Bearing::SEALS_NO_SEAL:
                return "";
            case Bearing::SEALS_ZZ:
                return " ZZ";
            case Bearing::SEALS_Z:
                return " Z";    
        }
    }
    public function create_clerance($clerance)
    {
        switch ($clerance)
        {
            case Bearing::RADIAL_CLERANCE_C2:
                return "";
            case Bearing::RADIAL_CLERANCE_C3:
                return " C3";
            case Bearing::RADIAL_CLERANCE_C4:
                return " C4";
        }
    }
    public function create_cage_ball_bearing($cage)
    {
        switch ($cage)
        {
            case Bearing::CAGE_METAL:
                return "";
            case Bearing::CAGE_BRONZE:
                return " /M";    
        }
    }
    public function create_high_tempature($highTemperature)
    {
        if ($highTemperature == 1)
          return " GJN";
        else
           return "";
    }
    public function create_snap_ring($snap_ring)
    {
        return $snap_ring==1?" NR":"";
    }
    public function create_insulated($insulated)
    {
        return $insulated==1?" VL0241":"";
    }
    public function bearing_creator($types,$min_no,$max_no,$seals,$clerances,$cages,$snapRings=[0],$highTemperatures=[0],$insulated=[0],$step=1)
    {
        $deepGroove = $types;
        foreach ($deepGroove as $type)
            for($cont = $min_no;$cont <= $max_no;$cont+=$step)   
                foreach ($seals as $seal)
                    foreach($clerances as $clerance)
                        foreach($cages as $cage)
                            foreach ($highTemperatures as $highTemperature)
                                foreach ($snapRings as $snap_ring)
                                    foreach ($insulated as $insul)
                                        Bearing::create([
                                            'name' => $type.str_pad("".$cont,2,"0",STR_PAD_LEFT),
                                            'full_designation' => $type.str_pad("".$cont,2,"0",STR_PAD_LEFT).
                                                                $this->create_seals($seal).
                                                                $this->create_clerance($clerance).
                                                                $this->create_cage_ball_bearing($cage).
                                                                $this->create_high_tempature($highTemperature).
                                                                $this->create_snap_ring($snap_ring).
                                                                $this->create_insulated($insul),
                                            'seals' => $seal,
                                            'radial_clerance' => $clerance,
                                            'cage' => $cage,
                                            'snap_ring' => $snap_ring,
                                            'high_temperature_grease' => $highTemperature,
                                            'insulated' => $insul
                                        ]);
    }

}

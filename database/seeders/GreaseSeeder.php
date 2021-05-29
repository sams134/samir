<?php

namespace Database\Seeders;

use App\Models\Materials\Grease;
use Illuminate\Database\Seeder;

class GreaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->create_grease('SKF LGHP 2','SKF','SKF_LGHP_2.pdf');
        $this->create_grease('SKF LGMT 2','SKF','SKF_LGMT_2.pdf');
        $this->create_grease('SKF LGWA 2','SKF','SKF_LGWA_2.pdf');
        $this->create_grease('SKF LGHQ 2','SKF','SKF_LGHQ_2.pdf');
        $this->create_grease('MOBIL POLYREX EM','MOBIL','MOBIL_POLYREX_EM.pdf');
        $this->create_grease('CHEVRON SRI 2','CHEVRON','CHEVRON_SRI.pdf');
        

    }
    public function create_grease($name,$brand,$url)
    {
        Grease::create([
            'name' => $name,
            'brand' => $brand,
            'url' => 'storage/materials/greases/'.$url
        ]);
    }
}

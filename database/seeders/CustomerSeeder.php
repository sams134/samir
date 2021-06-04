<?php

namespace Database\Seeders;

use App\Models\External\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Customer::factory(100)->create();
    }
}

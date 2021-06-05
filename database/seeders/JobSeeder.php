<?php

namespace Database\Seeders;

use App\Models\External\Customer;
use App\Models\Internal\Inventory;
use App\Models\Internal\Job;
use App\Models\Internal\Job_type;
use App\Models\Internal\Priority;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $date = new DateTime('2021-01-01');
        $job_types = Job_type::all();
        $customers = Customer::all();
        $priorities = Priority::all();
        $tecnicos = User::whereHas('user_type',function($q){
            $q->where('user_type_id','=',3);
        })->get();
        while ($date < now())
        {
            
            $number_of_motors = random_int(0,5);
            $last_job = Job::all()->last();
            
               // si ya existe una orden le sumo 1
            if ($last_job != null){
                $new_os = intval($last_job->os)+1;
                $new_year = $last_job->year;
            }
            else
            {
             // si no hay ordenes insertadas, creo la 1
                $new_os = 1;
                $year = new DateTime();
                $new_year = "2M".$date->format('y');
            }
            $random_time_expected_for_repair = random_int(1,10);
             $dateRequired = date('Y-m-d', strtotime($date->format('Y-m-d') . ' +'.$random_time_expected_for_repair.' day'));
             for ($i=0;$i<=$number_of_motors;$i++)
             {
                $job_type = $job_types->random()->id;
                Job::factory(1)->create([
                    'year' => $new_year,
                    'os' => str_pad("".$new_os++,4,"0",STR_PAD_LEFT),
                    'date_received' => $date,
                    'date_required' => $dateRequired,
                    'job_type_id' => $job_type,
                    'auth_by_user' => 2,
                    'customer_id' => $customers->random()->id,
                ])->each(function ($job) use ($priorities,$tecnicos){
                    Inventory::factory(1)->create(['job_id'=>$job->id])->each(function ($inv) use ($job){
                        $job->inventory()->save($inv);
                    });
                    $job->priorities()->attach([$priorities->random()->id]);
                    $job->assignments()->attach($tecnicos->random()->id,['assigned_by_id'=>1]);
                });
                
                
             }
            $date->modify("+1 day");

        }
    }
   
}

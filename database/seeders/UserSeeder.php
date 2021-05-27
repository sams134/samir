<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'Sam',
            'email' => 'sams134@gmail.com',
            'password' => bcrypt('ultima3616'),
        ]);
        $team = Team::create([
            'user_id' => $user->id,
            'name' => $user->name."'s Team",
            'personal_team' => 1
            ]);
        $team->save();
        $user->current_team_id = $team->id;
        $user->save();
       
        $user->profile = Profile::create([
            'name'=>'Samuel',
            'last_name'=>'Mayorga',
            'phone' => '52076235',
            'user_id' => $user->id
            ]);
        
        
    }
}

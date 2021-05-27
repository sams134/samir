<?php

namespace Database\Factories\External;

use App\Models\External\Motor;
use Illuminate\Database\Eloquent\Factories\Factory;

class MotorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Motor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->words(2,true),
            'inventory'=>$this->faker->bothify("##-####??"),
            'mfg' => $this->faker->randomElement(['ABB','Siemens','WEG','US Motor','Baldor','Techtop','Westinghouse']),
            'model' => $this->faker->bothify("???/## - ####"),
            'serial' => $this->faker->uuid,
            'power' => $this->faker->numberBetween(1,100),
            'hpkw' => $this->faker->randomElement([Motor::HP,Motor::KW]),
            'speed' => $this->faker->randomElement(['1765','1780','3550','3530','1180','1175','893','894']),
            'voltages' => $this->faker->randomElement(['230','460','230/460','208-230/460','4160']),
            'currents' =>  $this->faker->numberBetween(10,400),
            'frame' => $this->faker->randomElement(['213T','215T','250TS','280TC','443TS','330T','218S','250S/M']),
            'pf'=> $this->faker->numerify('0.##'),
            'efficiency' => $this->faker->numberBetween(85,95),
            'real_data' => $this->faker->randomElement([Motor::APROXHP,Motor::REALHP]),
            'motor_type' => $this->faker->randomElement([Motor::SINGLE_PHASE,Motor::THREE_PHASE,Motor::DC_MOTOR,Motor::SERVO])
        ];
    }
}

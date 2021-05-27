<?php

namespace Database\Factories\External;

use App\Models\External\Machine;
use Illuminate\Database\Eloquent\Factories\Factory;

class MachineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Machine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->word(),
            'mfg' => $this->faker->words(2,true),
            'model' => $this->faker->bothify("###-??##-#/#?"),
            'serial'=>$this->faker->uuid(),
            'inventory_no' => $this->faker->numerify("##-### #"),
            'location'=>$this->faker->sentence(4),
            'working_hours_week' => $this->faker->numberBetween(20,60)
        ];
    }
}

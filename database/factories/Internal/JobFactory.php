<?php

namespace Database\Factories\Internal;

use App\Models\Internal\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'marks' => $this->faker->paragraph(2),
            'auth_by_customer' => $this->faker->name()
        ];
    }
}

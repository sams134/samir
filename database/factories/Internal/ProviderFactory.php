<?php

namespace Database\Factories\Internal;

use App\Models\Internal\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Provider::class;

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
            'address' => $this->faker->address(),
            'main_contact' => $this->faker->name(),
            'rating' => $this->faker->numberBetween(2,5)
        ];
    }
}

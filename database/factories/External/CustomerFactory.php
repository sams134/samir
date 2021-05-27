<?php

namespace Database\Factories\External;

use App\Models\External\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence(2);
        return [
            //
            'name' => $name,
            'invoice_to' => $name." S.A.",
            'nit'=>$this->faker->numerify('#######-#'),
            'address' => $this->faker->address(),
            'logo_url'=> 'logos/'.$this->faker->image('public/storage/logos/',220,140,null,false),
        ];
    }
}

<?php

namespace Database\Factories\Internal;

use App\Models\Internal\Material;
use Illuminate\Database\Eloquent\Factories\Factory;


class MaterialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Material::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $stock = $this->faker->numberBetween(1,100);
        
        return [
            //
            'name' => $this->faker->words(3,true),
            'description' => $this->faker->sentence(),
            'product_type' => $this->faker->randomElement([Material::PRODUCT_RE_SELL_RAW_MATERIAL,
                                                          Material::PRODUCT_RE_SELL_PRODUCT,
                                                          Material::PRODUCT_BUYABLE_RAW_MATERIAL,
                                                          Material::PRODUCT_BUYABLE_INPUT,
                                                          Material::PRODUCT_SELLABLE]),
            'stock'=>$stock,
            'max' => $stock+5,
            'min' => 1,
            
        ];
    }
}

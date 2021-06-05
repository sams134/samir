<?php

namespace Database\Factories\Internal;

use App\Models\Internal\Inventory;
use App\Models\Internal\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'frame' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_MISSING,job::INV_DONT_USE]),
            'endbracket_de' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_MISSING,job::INV_DONT_USE]),
            'endbracket_nde' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_MISSING,job::INV_DONT_USE]),
            'connection_box' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_MISSING,job::INV_DONT_USE]),
            'coupling' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_MISSING,job::INV_DONT_USE]),
            'shaft' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_MISSING,job::INV_DONT_USE]),
            'fan' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_MISSING,job::INV_DONT_USE]),
            'fan_cover' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_MISSING,job::INV_DONT_USE]),
            'covers' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_MISSING,job::INV_DONT_USE]),
            'leads' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_MISSING,job::INV_DONT_USE,Job::INV_TO_EVALUATE]),
            'eyebolts' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_MISSING,job::INV_DONT_USE]),
            'nameplate' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_MISSING,job::INV_DONT_USE]),
            'heaters' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_MISSING,job::INV_DONT_USE]),
            'stator_core' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_MISSING,job::INV_DONT_USE]),
            'rotor' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_MISSING,job::INV_DONT_USE]),
            'slip_rings' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_DONT_USE]),
            'capacitor' => $this->faker->randomElement([job::INV_DONT_USE,Job::INV_TO_EVALUATE]),
            'brush_holders' => $this->faker->randomElement([job::INV_DONT_USE,Job::INV_TO_EVALUATE]),
            'base' => $this->faker->randomElement([job::INV_DONT_USE,Job::INV_TO_EVALUATE]),
            'brushes' => $this->faker->randomElement([job::INV_DONT_USE,Job::INV_TO_EVALUATE]),
            'terminal_block' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_MISSING]),
            'bolts' => $this->faker->randomElement([Job::INV_GOOD,job::INV_DAMAGED,job::INV_MISSING]),
            'frame_comment' => $this->faker->randomElement([null,$this->faker->sentence()],null,null),
            'endbracket_de_comment' => $this->faker->randomElement([null,$this->faker->sentence()],null,null),
            'endbracket_nde_comment' => $this->faker->randomElement([null,$this->faker->sentence()],null,null),
            'connection_box_comment' => $this->faker->randomElement([null,$this->faker->sentence()],null,null),
            'coupling_comment' => $this->faker->randomElement([null,$this->faker->sentence()],null,null),
            'shaft_comment' => $this->faker->randomElement([null,$this->faker->sentence()],null,null),
            'fan_comment' => $this->faker->randomElement([null,$this->faker->sentence()],null,null),
            'fan_cover_comment' => $this->faker->randomElement([null,$this->faker->sentence()],null,null),
            'rotor_comment' => $this->faker->randomElement([null,$this->faker->sentence()],null,null),
            'bolts_comment' => $this->faker->randomElement([null,$this->faker->sentence()],null,null),
        ];
    }
}

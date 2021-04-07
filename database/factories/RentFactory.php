<?php

namespace Database\Factories;

use App\Models\Rent;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class RentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount_paid' => $this->faker->randomElement(['30000', '35000', '40000', '45000']),
            'date_paid' => $this->faker->dateTimeThisYear(),
            'tenant_id' => Tenant::factory(),
        ];
    }
}

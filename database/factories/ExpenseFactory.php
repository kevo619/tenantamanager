<?php

namespace Database\Factories;

use App\Models\Expense;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expense::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Water bill', 'Land rates', 'Land Rent', 'Installation of water meters', 'Deposit Refund']),
            'category' => $this->faker->randomElement(['Utilities', 'Land rates']),
            'particulars' => $this->faker->paragraph(3),
            'amount' => $this->faker->numberBetween(700,21000),
        ];
    }
}

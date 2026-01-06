<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\AffiliateCommission;
use Illuminate\Database\Eloquent\Factories\Factory;

class AffiliateCommissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AffiliateCommission::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'payment_type' => 'fixed',
            'commission_type' => 'tin',
            'amount' => $this->faker->randomNumber(2),
            'title' => $this->faker->sentence(10),
            'note' => $this->faker->text(),
            'status' => $this->faker->numberBetween(0, 127),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\AffiliateBadge;
use Illuminate\Database\Eloquent\Factories\Factory;

class AffiliateBadgeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AffiliateBadge::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(10),
            'slug' => $this->faker->slug(),
            'img' => $this->faker->text(),
            'user_type' => 'influencer',
            'min_requirement' => $this->faker->randomNumber(0),
            'order' => $this->faker->numberBetween(0, 127),
            'reward_type' => 'fixed',
            'reward_amount' => $this->faker->randomNumber(2),
            'status' => $this->faker->numberBetween(0, 127),
            'description' => $this->faker->sentence(15),
            'has_consistency_rule' => $this->faker->numberBetween(0, 127),
            'consistency_value' => $this->faker->randomNumber(0),
        ];
    }
}

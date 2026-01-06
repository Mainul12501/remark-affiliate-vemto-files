<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\UserBadgeHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserBadgeHistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserBadgeHistory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'assigned_date' => $this->faker->text(255),
            'assigned_till' => $this->faker->text(255),
            'user_id' => \App\Models\User::factory(),
            'affiliate_badge_id' => \App\Models\AffiliateBadge::factory(),
        ];
    }
}

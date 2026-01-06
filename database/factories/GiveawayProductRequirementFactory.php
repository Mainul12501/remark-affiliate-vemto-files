<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\GiveawayProductRequirement;
use Illuminate\Database\Eloquent\Factories\Factory;

class GiveawayProductRequirementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GiveawayProductRequirement::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(10),
            'request_qty' => $this->faker->numberBetween(0, 127),
            'approved_qty' => $this->faker->numberBetween(0, 127),
            'is_reviewed_by_partner' => $this->faker->numberBetween(0, 127),
            'product_delivery_date' => $this->faker->text(255),
            'product_ack_date' => $this->faker->text(255),
            'slug' => $this->faker->slug(),
            'status' => $this->faker->text(255),
            'product_ack_status' => $this->faker->numberBetween(0, 127),
            'requested_user_id' => \App\Models\User::factory(),
            'requested_product_id' => \App\Models\Product::factory(),
            'admin_viewer_id' => \App\Models\User::factory(),
            'approver_id' => \App\Models\User::factory(),
        ];
    }
}

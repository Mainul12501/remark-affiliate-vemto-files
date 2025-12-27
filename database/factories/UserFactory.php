<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique->email(),
            'email_verified_at' => now(),
            'password' => \Hash::make('password'),
            'remember_token' => Str::random(10),
            'mobile' => $this->faker->unique->phoneNumber(),
            'user_type' => $this->faker->text(255),
            'profile_image' => $this->faker->text(),
            'provider' => $this->faker->text(255),
            'provider_token' => $this->faker->text(),
            'provider_id' => $this->faker->text(),
            'username' => $this->faker->unique->text(255),
            'approve_status' => $this->faker->numberBetween(0, 127),
            'block_status' => $this->faker->text(255),
            'user_id' => function () {
                return \App\Models\User::factory()->create([
                    'user_id' => null,
                    'created_by' => null,
                ])->id;
            },
            'created_by' => function () {
                return \App\Models\User::factory()->create([
                    'user_id' => null,
                    'created_by' => null,
                ])->id;
            },
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}

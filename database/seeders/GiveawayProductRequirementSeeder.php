<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GiveawayProductRequirement;

class GiveawayProductRequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GiveawayProductRequirement::factory()
            ->count(5)
            ->create();
    }
}

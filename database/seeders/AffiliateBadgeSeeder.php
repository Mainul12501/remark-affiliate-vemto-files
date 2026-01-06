<?php

namespace Database\Seeders;

use App\Models\AffiliateBadge;
use Illuminate\Database\Seeder;

class AffiliateBadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AffiliateBadge::factory()
            ->count(5)
            ->create();
    }
}

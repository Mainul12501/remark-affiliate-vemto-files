<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserBadgeHistory;

class UserBadgeHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserBadgeHistory::factory()
            ->count(5)
            ->create();
    }
}

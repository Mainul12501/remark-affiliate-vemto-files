<?php

namespace Database\Seeders;

use App\Models\BaseSetting;
use Illuminate\Database\Seeder;

class BaseSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BaseSetting::factory()
            ->count(5)
            ->create();
    }
}

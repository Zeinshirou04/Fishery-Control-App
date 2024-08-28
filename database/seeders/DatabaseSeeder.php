<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Devices;
use App\Models\User\UserProfiles;
use App\Models\User\Users;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Users::factory()
            ->has(UserProfiles::factory())
            ->has(Devices::factory())
            ->create();
    }
}

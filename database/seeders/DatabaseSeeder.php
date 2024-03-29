<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \Modules\User\Models\User::factory(10)->create();
         \Modules\User\Models\User::factory(10)->unverified()->create();
         \Modules\User\Models\User::factory(10)->isErfan()->create();
    }
}

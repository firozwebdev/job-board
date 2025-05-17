<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\JobPost;
use Illuminate\Database\Seeder;
use Database\Seeders\JobPostSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       // Create 10 users
        User::factory(10)->create();

        // Create 30 job posts
        JobPost::factory(30)->create();
    }
}

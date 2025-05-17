<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobPost;
use Carbon\Carbon;

class JobPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobPost::truncate(); // optional: clear table before seeding

        JobPost::create([
            'title' => 'Laravel Developer',
            'description' => 'Looking for an experienced Laravel developer to join our team.',
            'location' => 'Remote',
            'category' => 'Software Development',
            'company_logo' => null,
            'deadline' => Carbon::now()->addWeeks(4),
            'is_active' => true,
        ]);

        JobPost::create([
            'title' => 'Frontend Engineer',
            'description' => 'Seeking a skilled React developer to build interactive UIs.',
            'location' => 'New York, NY',
            'category' => 'Frontend Development',
            'company_logo' => null,
            'deadline' => Carbon::now()->addWeeks(3),
            'is_active' => true,
        ]);

        JobPost::create([
            'title' => 'Project Manager',
            'description' => 'Experienced Project Manager needed for overseeing software projects.',
            'location' => 'San Francisco, CA',
            'category' => 'Management',
            'company_logo' => null,
            'deadline' => Carbon::now()->addWeeks(5),
            'is_active' => true,
        ]);
    }
}

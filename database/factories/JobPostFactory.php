<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobPostFactory extends Factory
{
    protected $model = \App\Models\JobPost::class;

    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraphs(3, true),
            'location' => $this->faker->city(),
            'category' => $this->faker->randomElement(['Engineering', 'Design', 'Management', 'Marketing']),
            'company_logo' => null, // You can add some logic for fake logos if needed
            'deadline' => $this->faker->dateTimeBetween('now', '+3 months')->format('Y-m-d'),
            'is_active' => $this->faker->boolean(80), // 80% active jobs
        ];
    }
}

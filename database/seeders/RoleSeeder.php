<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // database/seeders/RoleSeeder.php
    Role::firstOrCreate(['name' => 'admin']);
    Role::firstOrCreate(['name' => 'applicant']);

    }
}

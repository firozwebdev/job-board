<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user = User::firstOrCreate([
        'email' => 'admin@jobboard.com',
        ], [
            'name' => 'Admin',
            'password' => bcrypt('password'),
        ]);
        $user->assignRole('admin');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'admin@adhgroup.com',
            ],
            [
                'name' => 'Administrateur',
                'password' => Hash::make('Admin@2024'),
                'role' => 'admin',
            ]
        );
    }
}

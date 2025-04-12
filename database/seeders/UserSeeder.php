<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@buildnetic.com',
            'password' => Hash::make('Admin@123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Insaf Ali',
            'email' => 'insaf.ali0825@gmail.com',
            'password' => Hash::make('Iali@1234'),
            'role' => 'user',
        ]);
    }
}

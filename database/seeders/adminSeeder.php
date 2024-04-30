<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $admins = [
                [
                    'name' => 'Rahel',
                    'email' => 'admin200@gmail.com',
                    'password' => Hash::make('admin2024'),
                    'created_at' => now(),
                    'updated_at' => now()   
                ]
                ];
                User::insert($admins);
    
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(30)->create();
        User::create([
            'name' => 'Andi Zunaidi',
            'email' => 'superuser@gmail.com',
            'role' => 'admin',
            'email_verified_at'  => now(),
            'password' => Hash::make('123456'),
            'phone' => '081336487526',
            'bio' => 'semangat belajar',
        ]);
        User::create([
            'name' => 'Andi Zunaidi',
            'email' => 'superadmin@gmail.com',
            'role' => 'superadmin',
            'email_verified_at'  => now(),
            'password' => Hash::make('123456'),
            'phone' => '081336487526',
            'bio' => 'semangat belajar',
        ]);
    }
}

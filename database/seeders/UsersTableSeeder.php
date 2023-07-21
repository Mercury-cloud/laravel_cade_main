<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Demo Account',
            'email' => 'demo@gmail.com',
            'password' => Hash::make('my-password'),
        ]);
    }
}

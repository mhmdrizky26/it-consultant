<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User',
            'email' => 'User@gmail.com',
            'password' => bcrypt('password')
        ]);
        $admin->assignRole('user');
    }
}

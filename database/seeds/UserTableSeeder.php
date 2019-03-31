<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a user, and give roles
        $user = App\User::create([
            'name' => 'Super Man',
            'username' => 'super',
            'email' => 'super@laravel.dev',
            'password' => bcrypt('123456'),

        ])->assignRole('super');

        // ---------------

        $user = App\User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@laravel.dev',
            'password' => bcrypt('123456'),

        ])->assignRole('admin');

        $user = App\User::create([
            'name' => 'Editor',
            'username' => 'editor',
            'email' => 'editor@laravel.dev',
            'password' => bcrypt('123456'),

        ])->assignRole('editor');

        // ---------------

        $user = App\User::create([
            'name' => 'Manager',
            'username' => 'manager',
            'email' => 'manager@laravel.dev',
            'password' => bcrypt('123456'),

        ])->assignRole('manager');

        // ... Add other user and assign them to roles
    }
}

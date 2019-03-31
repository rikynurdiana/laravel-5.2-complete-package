<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon\Carbon::now();

        // Basic roles data
        App\Role::insert([
            ['name' => 'super', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'admin', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'editor', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'manager', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}

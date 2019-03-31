<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon\Carbon::now();

        // Basic permissions data
        App\Permission::insert([
            ['name' => 'super', 'created_at' => $now, 'updated_at' => $now],

            ['name' => 'admin', 'created_at' => $now, 'updated_at' => $now],

            ['name' => 'editor', 'created_at' => $now, 'updated_at' => $now],

            ['name' => 'manager', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}

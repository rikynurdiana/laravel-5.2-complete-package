<?php

use Illuminate\Database\Seeder;

class PermissionRoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add a permissions to a role
        $role = App\Role::where('name', 'super')->first();
        $role->addPermission('super');

        $role = App\Role::where('name', 'admin')->first();
        $role->addPermission('admin');

        $role = App\Role::where('name', 'editor')->first();
        $role->addPermission('editor');

        $role = App\Role::where('name', 'manager')->first();
        $role->addPermission('manager');

    }
}

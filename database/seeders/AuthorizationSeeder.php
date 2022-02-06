<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AuthorizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        $role_editor = Role::create(['name' => 'editor']);
        $role_user = Role::create(['name' => 'user']);

        $perm_editor1 = Permission::create(['name' => 'edit posts']);
        $perm_editor2 = Permission::create(['name' => 'enter backend']);
        $perm_user = Permission::create(['name' => 'show premium-posts']);

        $role_editor->givePermissionTo($perm_editor1);
        $role_editor->givePermissionTo($perm_editor2);
        $role_user->givePermissionTo($perm_user);

        User::find(1)->assignRole('admin');
        User::find(2)->assignRole('editor');

        User::where('id', '>', 1)->get()->each(function (User $user) {
            $user->assignRole('user');
        });

    }
}

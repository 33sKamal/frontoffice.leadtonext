<?php

namespace Database\Seeders;

use App\Enums\Permission\PermissionAction;
use App\Enums\Permission\PermissionElement;
use App\Enums\Role\RoleEnum;
use App\Models\Permission\Permission;
use App\Models\Role\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Permission::all()->each->delete();

        foreach (PermissionElement::getValues() as $elemnt) {
            foreach (PermissionAction::getValues() as $action) {
                Permission::firstOrCreate([
                    Permission::NAME_COLUMN_NAME => "$action $elemnt",
                ]);
            }
        }

        foreach (Role::all() as $role) {

            foreach (RoleEnum::getMenuElementByRole($role->name) as $elemnt) {

                if ($elemnt != PermissionElement::DASHBOARD) {
                    foreach (PermissionAction::getValues() as $action) {
                        $role->givePermissionTo("$action $elemnt");
                    }
                }

                if ($elemnt == PermissionElement::DASHBOARD) {
                    $role->givePermissionTo(PermissionAction::VIEW_ANY." $elemnt");
                }
            }
        }

        // Artisan::command('cache:clear');

    }
}

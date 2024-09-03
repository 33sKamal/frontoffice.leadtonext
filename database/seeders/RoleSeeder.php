<?php

namespace Database\Seeders;

use App\Enums\Role\RoleEnum;
use App\Models\Role\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        foreach (RoleEnum::getValues() as $role) {
            Role::create([
                Role::NAME_COLUMN_NAME => $role,
            ]);
        }
    }
}

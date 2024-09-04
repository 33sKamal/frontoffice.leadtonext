<?php

namespace Database\Seeders;

use App\Enums\Currency\CurrencyCodeListEnum;
use App\Enums\Role\RoleEnum;
use App\Enums\User\UserStatus;
use App\Models\Account\Account;
use App\Models\Role\Role;

use App\Services\Balance\BalanceService;
use App\Services\User\RegisterNewSellerService;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $balanceService = app()->make(BalanceService::class);
        $registerNewSellerService = app()->make(RegisterNewSellerService::class);
        $registeredSeller = null;

        $roles = Role::all();
        $faker = Factory::create();

        $accounts = Account::get();

        foreach ($accounts as $account) {

            foreach ($roles as $role) {

                $paylaod = [
                    User::FULL_NAME_COLUMN_NAME => $faker->name(),
                    User::PHONE_COLUMN_NAME => '06000000'.rand(10, 99),
                    User::EMAIL_COLUMN_NAME => $role->getName()."@{$account->name}.ma",
                    User::STATUS_COLUMN_NAME => UserStatus::ACTIVE,
                    User::EMAIL_VERIFIED_AT_COLUMN_NAME => now(),
                    User::PASSWORD_COLUMN_NAME => Hash::make('root'),
                ];

                if ($role->getName() == RoleEnum::SELLER) {
                    $registeredSeller = $registerNewSellerService->create($paylaod, $account->name.' V', CurrencyCodeListEnum::DZD);
                } else {
                    $user = User::create(array_merge($paylaod, [
                        User::ACCOUNT_ID_COLUMN_NAME => $account->id,
                    ]));
                }

                if ($role->getName() == RoleEnum::SUPER_ADMIN) {
                    $account->update([
                        'user_id' => $user->getKey(),
                    ]);
                }

                $user->assignRole($role->getName());
                $user->update([
                    'status' => UserStatus::ACTIVE,
                ]);
            }

            for ($i = 1; $i < 5; $i++) {

                $user = User::create([
                    User::FULL_NAME_COLUMN_NAME => $faker->name(),
                    User::PHONE_COLUMN_NAME => '06000000'.rand(10, 99),
                    User::EMAIL_COLUMN_NAME => "agent-$i@{$account->name}.ma",
                    User::STATUS_COLUMN_NAME => UserStatus::ACTIVE,
                    User::EMAIL_VERIFIED_AT_COLUMN_NAME => now(),
                    User::PASSWORD_COLUMN_NAME => Hash::make('root'),
                    User::ACCOUNT_ID_COLUMN_NAME => $account->id,
                ]);

                $user->assignRole(RoleEnum::AGENT);

                $balanceService->bootstrapBalanceForNewAccount($account->getKey());
            }
        }

        // Login the first use
        Auth::login($registeredSeller);
    }
}

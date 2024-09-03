<?php

namespace Database\Seeders;

use App\Enums\Account\AccountStatus;
use App\Enums\Currency\CurrencyCodeListEnum;
use App\Models\Account\Account;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $accounts = [
            'leadtonext',
        ];

        foreach ($accounts as $account) {
            Account::create([
                Account::NAME_COLUMN_NAME => $account,
                // Account::USER_ID_COLUMN_NAME => ,
                Account::STATUS_COLUMN_NAME => AccountStatus::ACTIVE,
                Account::CURRENCY_COLUMN_NAME => CurrencyCodeListEnum::DZD,
                Account::EXTRA_DATA_COLUMN_NAME => [
                    1 => 'en',
                ],

            ]);
        }
    }
}

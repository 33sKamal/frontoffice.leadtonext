<?php

namespace Database\Seeders;

use App\Enums\Sheet\SheetStatus;
use App\Models\Account\Account;
use App\Models\Sheet\Sheet;
use Illuminate\Database\Seeder;

class SheetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $account = Account::first();

        $sheet = Sheet::create([
            'name' => 'SheetA',
            'account_id' => $account->id,
            'sheet_link' => 'https://docs.google.com/spreadsheets/d/1GVKTNdW_f_dCEG2yAnnKgOZTZifyfjmSYWd9siT0AyY/edit#gid=0',
            //  "cursor" => '',
            'google_api_key' => 'AIzaSyCMdoMgnZVxhcduIonscHmqRtfQt98akwc',
            'phone_key_name' => 'phone',
            'status' => SheetStatus::ACTIVE,
            'sku_key_name' => 'sku',
        ]);
    }
}

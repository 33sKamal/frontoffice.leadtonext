<?php

namespace Database\Seeders;

use App\Models\City\City;
use App\Models\Zrexpress\Zrexpress;
use App\Services\Shipping\Zrexpress\ZrexpressShippingService;
use Illuminate\Database\Seeder;

class ZrexpressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Zrexpress::all()->each->delete();

        $zrexpressShippingService = app()->make(ZrexpressShippingService::class);

        foreach ($zrexpressShippingService->shippingPricing() as $data) {

            $city = City::where(City::NAME_COLUMN_NAME, $data['Wilaya'])->first();

            if (! $city instanceof City) {
                continue;
            }

            Zrexpress::create([
                Zrexpress::IDWILAYA_COLUMN_NAME => $data['IDWilaya'],
                Zrexpress::CITY_TO_ID_COLUMN_NAME => $city->id,
                Zrexpress::DOMICILE_COLUMN_NAME => $data['Domicile'],
                Zrexpress::STOPDESK_COLUMN_NAME => $data['Stopdesk'],
                Zrexpress::ANNULER_COLUMN_NAME => $data['Annuler'],
            ]);

        }
    }
}

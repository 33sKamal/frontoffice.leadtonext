<?php

namespace Database\Seeders;

use App\Enums\Lead\LeadStatus;
use App\Enums\LeadHistory\LeadHistoryPayloadFieldEnum;
use App\Enums\Role\RoleEnum;
use App\Models\Lead\Lead;
use App\Models\LeadHistory\LeadHistory;
use App\Models\User\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        DB::table(LeadHistory::TABLE)->delete();

        foreach (Lead::all() as $lead) {

            $status = rand(2, 6);

            for ($index = 1; $index < rand(1, 3); $index++) {

                $agent = User::role(RoleEnum::AGENT)->inRandomOrder()->first();

                $leadData[LeadHistory::PAYLOAD_COLUMN_NAME][LeadHistoryPayloadFieldEnum::DESCRIPTION] = $faker->text();

                $leadData = [
                    LeadHistory::LEAD_ID_COLUMN_NAME => $lead->getKey(),
                    LeadHistory::STATUS_FROM_COLUMN_NAME => $status,
                    LeadHistory::STATUS_TO_COLUMN_NAME => $status + 1,
                    LeadHistory::ACCOUNT_ID_COLUMN_NAME => $lead->getAccountId(),
                    LeadHistory::HISTORYABLE_ID_COLUMN_NAME => $agent->getKey(),
                    LeadHistory::HISTORYABLE_TYPE_COLUMN_NAME => User::class,
                ];

                if ($status == LeadStatus::CALL_LATER) {
                    $leadData[LeadHistory::PAYLOAD_COLUMN_NAME][LeadHistoryPayloadFieldEnum::CALL_AT] = now()->addHour(rand(3, 10));
                }

                LeadHistory::create($leadData);
                $status++;
            }
        }
    }
}

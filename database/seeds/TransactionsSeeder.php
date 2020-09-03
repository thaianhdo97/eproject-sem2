<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('transactions')->truncate();
        DB::table('transactions')->insert([
            [
                'id' => 1,
                'customer_id' => 1,
                'province_id' => 1,
                'party_number' => 10,
                'start' => Carbon::now()->addDays(7)->format('Y-m-d H:i:s'),
                'end' =>Carbon::now()->addDays(10)->format('Y-m-d H:i:s'),
                'total_cost' => 1000000,
                'status' => 1,
               'created_at' => Carbon::now()->addDays(-7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),

            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpendingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spendings')->insert([
            [
                'user_id' => 1,
                'type_id' => 1,
                'amount' => 2000,
                'date' => '2023-07-01',
                'note' => 'Lunch',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
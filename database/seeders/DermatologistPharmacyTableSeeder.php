<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DermatologistPharmacyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dermatologist_pharmacy')->insert([
            [
                'dermatologist_id' => 1,
                'pharmacy_id' => 1
            ]
        ]);
    }
}

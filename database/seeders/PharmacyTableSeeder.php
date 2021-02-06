<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PharmacyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pharmacies')->insert([
            [
                'name' => 'Pharmacy',
                'address' => 'Address',
                'city' => 'City',
                'country' => 'Country',
                'description' => ' Description of pharmacy'
            ]
        ]);
    }
}

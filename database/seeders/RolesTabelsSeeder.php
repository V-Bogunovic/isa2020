<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTabelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('system_admins')->insert([[]]);
        DB::table('pharmacy_admins')->insert([['pharmacy_id' => 1]]);
        DB::table('pharmacists')->insert([['pharmacy_id' => 1]]);
        DB::table('dermatologists')->insert([[]]);
        DB::table('suppliers')->insert([[]]);
        DB::table('patients')->insert([[]]);
    }
}

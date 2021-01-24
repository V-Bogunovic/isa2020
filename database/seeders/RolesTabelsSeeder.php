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
        DB::table('pharmacy_admins')->insert([[]]);
        DB::table('pharmacists')->insert([[]]);
        DB::table('dermatologists')->insert([[]]);
        DB::table('suppliers')->insert([[]]);
        DB::table('patients')->insert([[]]);
    }
}

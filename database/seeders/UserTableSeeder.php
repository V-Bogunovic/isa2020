<?php

namespace Database\Seeders;

use App\Enumerations\RoleEnumeration;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'System Admin',
                'email' => 'sys.admin@isa2020.ac.rs',
                'password' => bcrypt('123456'),
                'roleable_type' => RoleEnumeration::SYSTEM_ADMIN,
                'roleable_id' => 1
            ],
            [
                'name' => 'Pharmacy Admin',
                'email' => 'pharmacy.admin@isa2020.ac.rs',
                'password' => bcrypt('123456'),
                'roleable_type' => RoleEnumeration::PHARMACY_ADMIN,
                'roleable_id' => 1
            ],
            [
                'name' => 'Pharmacist',
                'email' => 'pharmacist@isa2020.ac.rs',
                'password' => bcrypt('123456'),
                'roleable_type' => RoleEnumeration::PHARMACIST,
                'roleable_id' => 1
            ],
            [
                'name' => 'Dermatologist',
                'email' => 'dermatologist@isa2020.ac.rs',
                'password' => bcrypt('123456'),
                'roleable_type' => RoleEnumeration::DERMATOLOGIST,
                'roleable_id' => 1
            ],
            [
                'name' => 'Supplier',
                'email' => 'supplier@isa2020.ac.rs',
                'password' => bcrypt('123456'),
                'roleable_type' => RoleEnumeration::SUPPLIER,
                'roleable_id' => 1
            ],
            [
                'name' => 'Patient',
                'email' => 'patient@isa2020.ac.rs',
                'password' => bcrypt('123456'),
                'roleable_type' => RoleEnumeration::PATIENT,
                'roleable_id' => 1
            ],
        ]);
    }
}

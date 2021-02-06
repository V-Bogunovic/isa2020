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
                'first_name' => 'System',
                'last_name' => 'Admin',
                'address' => 'address',
                'city' => 'city',
                'country' => 'country',
                'phone' => '123456789',
                'email' => 'sys.admin@isa2020.ac.rs',
                'password' => bcrypt('123456'),
                'roleable_type' => RoleEnumeration::SYSTEM_ADMIN,
                'roleable_id' => 1
            ],
            [
                'first_name' => 'Pharmacy',
                'last_name' => 'Admin',
                'address' => 'address',
                'city' => 'city',
                'country' => 'country',
                'phone' => '123456798',
                'email' => 'pharmacy.admin@isa2020.ac.rs',
                'password' => bcrypt('123456'),
                'roleable_type' => RoleEnumeration::PHARMACY_ADMIN,
                'roleable_id' => 1
            ],
            [
                'first_name' => 'Pharmacist',
                'last_name' => 'Pharmacist',
                'address' => 'address',
                'city' => 'city',
                'country' => 'country',
                'phone' => '123456798',
                'email' => 'pharmacist@isa2020.ac.rs',
                'password' => bcrypt('123456'),
                'roleable_type' => RoleEnumeration::PHARMACIST,
                'roleable_id' => 1
            ],
            [
                'name' => 'Dermatologist',
                'last_name' => 'Dermatologist',
                'address' => 'address',
                'city' => 'city',
                'country' => 'country',
                'phone' => '123456798',
                'email' => 'dermatologist@isa2020.ac.rs',
                'password' => bcrypt('123456'),
                'roleable_type' => RoleEnumeration::DERMATOLOGIST,
                'roleable_id' => 1
            ],
            [
                'first_name' => 'Supplier',
                'last_name' => 'Supplier',
                'address' => 'address',
                'city' => 'city',
                'country' => 'country',
                'phone' => '123456798',
                'email' => 'supplier@isa2020.ac.rs',
                'password' => bcrypt('123456'),
                'roleable_type' => RoleEnumeration::SUPPLIER,
                'roleable_id' => 1
            ],
            [
                'first_name' => 'Patient',
                'last_name' => 'Patient',
                'address' => 'address',
                'city' => 'city',
                'country' => 'country',
                'phone' => '123456798',
                'email' => 'patient@isa2020.ac.rs',
                'password' => bcrypt('123456'),
                'roleable_type' => RoleEnumeration::PATIENT,
                'roleable_id' => 1
            ],
        ]);
    }
}

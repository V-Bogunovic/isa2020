<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Enumerations\RoleEnumeration;

class RelationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            RoleEnumeration::SYSTEM_ADMIN => 'App\Models\SystemAdmin',
            RoleEnumeration::PHARMACY_ADMIN => 'App\Models\PharmacyAdmin',
            RoleEnumeration::PHARMACIST => 'App\Models\Pharmacist',
            RoleEnumeration::DERMATOLOGIST => 'App\Models\Dermatologist',
            RoleEnumeration::SUPPLIER => 'App\Models\Supplier',
            RoleEnumeration::PATIENT => 'App\Models\Patient',
        ]);
    }
}

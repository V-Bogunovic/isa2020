<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'city',
        'country',
        'description'
    ];

    /**
     * Get the pharmacists for the pharmacy.
     */
    public function pharmacists()
    {
        return $this->hasMany(Pharmacist::class);
    }

    /**
     * Get the pharmacy admins for the pharmacy.
     */
    public function pharmacyAdmins()
    {
        return $this->hasMany(PharmacyAdmin::class);
    }

    /**
     * The dermatologists that works at pharmacy.
     */
    public function dermatologists()
    {
        return $this->belongsToMany(Dermatologist::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dermatologist extends Model
{
    use HasFactory;

    /**
     * Get the dermatologist's user.
     */
    public function user()
    {
        return $this->morphOne(User::class, 'roleable');
    }

    /**
     * The pharmacies that dermatologist works at.
     */
    public function pharmacies()
    {
        return $this->belongsToMany(Pharmacy::class);
    }
}
